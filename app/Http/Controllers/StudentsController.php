<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller
{
    public function home(){
    	
    	return view('students.homepage');
    }

    public function addCourse(){
    	
    }
}
