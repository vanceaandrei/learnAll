@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile setings</div>
                <div class="panel-body">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <p>Photo</p>
                            <img width = "400px" height = "350px" src= "data:image/png;base64,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">
                            <button  class="btn btn-primary">
                                 <a href=" {{ url('/edit/editPicture') }}"> 
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
                                        <p class="text-info">Crusuri</p>
                                    </td>
                                    <td>
                                        <p class="col-md-6">Salut</p>
                                    </td>
                                </tr>
                                @endif
                            </table>
                            <button class="btn btn-primary">
                                 <a href=" {{ url('/edit/editProfile') }}">  <i class="fa fa-btn fa-cog"></i>Edit Profile</a>
                                   
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