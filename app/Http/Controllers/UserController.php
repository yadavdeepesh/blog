<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // create a function to return the user name 

    function getUser() {
        return "Deepesh Yadav";
    }

      function aboutUser() {
        return "About the user: Deepesh Yadav";
    }

        function getName($name) {
        return view('getusername', ['name' => $name]);
    }

    function getUserName() {
        return view('user');
    }

    function adminLogin() {
        return view('admin.login');
    }

   
}
