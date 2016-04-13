<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Course;


class ProfessorsController extends Controller
{
    public function addCourse(Request $request){

    	$idProf = Auth::user()->id;
    	Course::create([
    		'name' => $request['name'],
    		'id_professor' => $idProf,
    		]);
    	return redirect('/home');
    }

    public function stream(){
    	return view('streaming/profile');
    }
}
