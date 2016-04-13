<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Professor;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    public function update(Request $request){
    	//var_dump(Input::file('pic'));
    	$user = Auth::user();
    	//dd($user->name);
    	$user->image = Input::file('pic');
    	//dd(Input::file('pic'));
    	$user->save();
    	return redirect('profile');

    }
    public function store(Request $r)
    {
        $image = Input::file('asd');
        $validator = Validator::make([$image], ['image' => 'required']);
        if ($validator->fails()) {
            return $this->errors("Nu exista");
        }
        $destinationPath = storage_path() . '/uploads';
        if(!$image->move($destinationPath, $image->getClientOriginalName())) {
            return $this->errors("eroor");
        }
        return response()->json(['success' => true], 200);
    }
    public function add(){
        return redirect('home');
    }
}
