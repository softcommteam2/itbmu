@extends('layouts.app')

@section('content')


<form class="relative px-8 pb-8 space-y-8 bg-gray-200 " action="{{ url('admin/users/'.$user[0]->id) }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="space-y-8 divide-y divide-blue-500 sm:space-y-5">
        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>

            <h2 class="text-xl font-bold leading-8 text-gray-900">
            <u> User update form </u>
            </h2>
            @if (session('success'))
                <div class="p-3 mt-4 text-sm text-green-800 bg-green-100 rounded-md">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="p-3 mt-4 text-sm text-red-800 bg-red-100 rounded-md">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div class="p-3 space-y-6 border sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm" value="{{ old('name', $user[0]->name) }}" required>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        Email
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm" value="{{ old('email', $user[0]->email) }}" required>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        New Password
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="password" name="password" id="password" autocomplete="new-password" minlength="12" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <p class="mt-1 text-xs text-gray-500">At least 12 characters. Leave blank to keep the current password.</p>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        Confirm New Password
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="current_password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 text-right mr-8">
                        Current Password
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="password" name="current_password" id="current_password" autocomplete="current-password" required class="block w-full max-w-lg rounded-md shadow-sm focus:ring-yellow-300 focus:border-yellow-300 sm:text-sm">
                        <p class="mt-1 text-xs text-gray-500">Required to save any change.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <a href="{{ url('admin/users') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-yellow-400 border border-yellow-100 rounded-md shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
            Cancel
            </a>
            <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300">
            Save
            </button>
        </div>
    </div>
</form>

@endsection
