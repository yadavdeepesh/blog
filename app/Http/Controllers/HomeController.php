<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show(){
        // return redirect()->to('/test-route/home');
        // return view('test-route.home');
        return redirect()->route('home');
    }

    // function username(){
    //     return redirect()->route('user',['name' => 'Deepesh']);
    // }
    function username($name)
    {
        return $name;
    }
}
