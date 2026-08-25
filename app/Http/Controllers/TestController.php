<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    //
    function testView() {
        return view('test');
    }

    function homePage() {
        return view('home');
    }

    function aboutPage($name) {
        return view('about',['name' => $name]);
    }

    function adminLogin($name) {
        // if (View::exists('admin.login')) {
        //     return view('admin.login',['name' => $name]);
        // } else {
        //     return "View not found";
        // }

          if (View::exists('admin.signup')) {
            return view('admin.signup',['name' => $name]);
        } else {
            return "View not found";
        }
        //return view('admin.login',['name' => $name]);
    }

    
}
