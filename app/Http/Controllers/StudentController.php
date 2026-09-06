<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        // return view('student.home');
        return "This is the student show function page.";

    }
    function add(){
        // return view('student.add');
        return "This is the student add function page.";
    }

    function delete(){
        return "This is the student delete function page.";
    }

    function showName($name){
        return "This is the student show name function page. Name: ".$name;
    }
}
