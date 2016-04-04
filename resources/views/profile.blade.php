@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile settings</div>
                <div class="panel-body">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <p>Photo</p>
                            <img width = "400px" height = "350px" src= "">
                            <button class="btn btn-primary">
                                 <a href=" {{ url('/editPicture') }}"> 
                                    <i class="fa fa-btn fa-file-image-o"></i>Edit picture</a>
                            </button>
                        </div>
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6" >
                            <table >
                                <tr style = "border-bottom:1.5px solid white " >    
                                    <td >
                                        <p class="text-info">First Name</p>
                                    </td>
                                    <td>
                                        <p class="col-md-6">{{Auth::user()->name}}</p>
                                    </td>
                                </tr>
                                <tr style = "border-bottom:1.5px solid white ">    
                                    <td class = 'tdborder'>
                                        <p class=" text-info">Last Name</p>
                                    </td>
                                    <td>
                                        <p class="col-md-6">{{Auth::user()->surname}}</p>
                                    </td>
                                </tr>
                                <tr>    
                                    <td >
                                        <p class="text-info">Email</p>
                                    </td>
                                    <td >
                                        <p class="col-md-6">{{Auth::user()->email}}</p>
                                    </td>
                                </tr>
                                @if(Entrust::hasRole('prof'))
                                <tr style = "border-bottom:1.5px solid white;border-top:1.5px solid white ">    
                                    <td class = 'tdborder'>
                                        <p class=" text-info">Specialization</p>
                                    </td>
                                    <td>
                                        <p class="col-md-6">{{$specializare}}</p>
                                    </td>
                                </tr>
                                <tr>    
                                    <td>
                                        <p class="text-info">Cursuri</p>
                                    </td>
                                    <td>
                                        <p class="col-md-6">Salut</p>
                                    </td>
                                </tr>
                                @endif
                            </table>
                            <button class="btn btn-primary">
                                 <a href=" {{ url('/editProfile') }}">  <i class="fa fa-btn fa-cog"></i>Edit Profile</a>
                                   
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{URL::Asset('css/myStyle.css')}}">
@endsection