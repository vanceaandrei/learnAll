<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Course;
use App\Subscribe;
use Auth;
use db;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
         // if($user->hasRole('stud')){
         //     $subscribes = Subscribe::where('id_student', '=', $user->id)->get();
         //     $courses = null;
         //     foreach($subscribes as $subscribe){
         //         $courses += Course::where('id', '=', $subscribe->id)->get();
         //     }
             
         //     return view('students/homepage',compact('courses'));
         //  }else{
         if($user->hasRole('stud')){    
              $courses = Course::get();
              return view('home',compact('courses'));
          }else{

            $courses = Course::where('id_professor', '=', $user->id)->get();
              return view('home',compact('courses'));
          }
         //  
    }
}
