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

    function addUser(Request $request){
       echo "Add User Function";
    //    echo "<br>";
    //     echo "Name ".$request->username;
    //     echo "Email ".$request->email;
    //     echo "City ".$request->city;
        $request->validate([
            'username' => 'required |min:3|max:10',
            'email' => 'required    |email',
            'city' => 'required |min:3|max:10',
            'skill' => 'required']);

       
        
        return $request;
    }

    function addStudentUser(Request $request){
         echo "age ".$request->age;
        echo "gender ".$request->gender;
        echo "City ".$request->city;
        print_r($request->skill);
        
        return $request;
       
    }
   
}
