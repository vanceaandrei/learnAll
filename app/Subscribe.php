<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable=[

     	'id_course',
     	'id_student',
     ];
}
