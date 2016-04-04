<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professor;
use App\Http\Requests;

class UsersController extends Controller
{
    public function profile(){
    	$user = Auth::user();
    	if($user->hasRole('prof')){
    		$specializare = Professor::where('user_id','=',$user->id)->first()->specialization;
    	}
    	return view('profile',compact('specializare'));
    }
   
    public function editPicture(){
    	return view('editPicture');
    }

}
