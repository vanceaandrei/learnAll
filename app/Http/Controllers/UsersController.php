<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Professor;
use Auth;
use Entrust;


class UsersController extends Controller
{
    public function profile(){
    	$user = Auth::user();
    	if($user->hasRole('prof')){
    		$specializare = Professor::where('user_id','=',$user->id)->first()->specialization;
    	}

    	return view('profil',compact('specializare'));
    }
    public function change(Request $r){
    	$user = Auth::user();
    	// dd($r->toArray());
    	$this->validate($r,['name'=>'required|max:250','surname'=>'required|max:250',
    		'email'=>'required|email']);
    	$user->name=$r->name;
    	$user->surname=$r->surname;
    	$user->email=$r->email;

    	if($user->hasRole('prof')){
    		$this->validate($r,['specialization'=>'required']);
    		$prof = Professor::where('user_id','=',$user->id)->first();
    		$prof->specialization = $r->specialization;
    		$prof->save();
     	}

    	$user->save();
    	return redirect('profile');
    }

}


