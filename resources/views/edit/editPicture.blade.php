@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile Picture</div>
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload image</label>

                            <div class="col-md-6">
                               <!--  <form action="demo_form.asp" enctype="multipart/form-data" >
                                  <input id ="asd" type="file" name="pic" >

                                  <!-- <input type="text" id="f" name="text">  
                                <button type="submit" class="btn btn-primary">
                                     <i class="fa fa-btn fa-user"></i>Submit</a>
                                </button> 
                                </form>  -->                       
                                <form action="demo_form.asp">
                                  <input type="file" name="pic" accept="image/*">
                                 <input type="submit">
                                </form>
                            </div>
                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     <a href=" {{ url('profil') }}"><i class="fa fa-btn fa-user"></i>Submit</a>
                                </button>
                            </div>
                        </div> -->
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
