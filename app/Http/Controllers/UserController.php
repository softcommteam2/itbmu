<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        // Hash the password
        $hashedPassword = Hash::make($request->input('password'));

        // Create the user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $hashedPassword;
        $user->save();

        // Redirect with success message
        return redirect('admin/users');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', Auth::user()->id)->get();
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Users may only change their own account
        abort_unless((int) $id === Auth::id(), 403);
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'current_password' => 'required|current_password',
            'password' => 'nullable|string|min:12|confirmed',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $passwordChanged = $request->filled('password');
        if ($passwordChanged) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        if ($passwordChanged) {
            // Sign out every other session that used the old password
            Auth::logoutOtherDevices($request->input('password'));
        }

        return back()->with('success', $passwordChanged ? 'Password changed. Other devices were logged out.' : 'Account updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
