<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function organization()
    {
       $organizations = Organization::class;
        return view('front.organization',compact('organizations'));
    }

}
