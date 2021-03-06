@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form id="register" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('account_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Account Type</label>

                            <div class="col-md-6">
                                <select style = "color:black" name="account_type">
                                    <option value="student">Student</option>
                                    <option value="professor">Professor</option>
                                </select>
                                @if ($errors->has('account_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('specialization') ? ' has-error' : '' }}" id="specialization_div" hidden>
                            <label for="specialization" class="col-md-4 control-label">Specialization</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="specialization" value="{{ old('specialization') }}">

                                @if ($errors->has('specialization'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('courseName') ? ' has-error' : '' }}" id="courseName_div" hidden>
                             <label class="col-md-4 control-label">Course Name</label>
 
                             <div class="col-md-6">
                                 <input for="courseName" type="text" class="form-control" name="courseName" value="{{ old('courseName') }}">
 
                                 @if ($errors->has('courseName'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('courseName') }}</strong>
                                     </span>
                                 @endif
                             </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="submit_button" class="col-md-6 col-md-offset-4">
                                <button id="submit_button" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('select[name="account_type"]').change(function(){
        if($(this).val() == 'professor'){
            $('#specialization_div').show();
            $('#courseName_div').show();
        }else{
            $('#specialization_div').hide();
            $('#courseName_div').hide();
        }
    });
</script>
<script>
        $(document).ready(function() {
            // <!-- Real-time Validation -->
            //     <!--Name can't be blank-->
                $('input[name=name]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                    if(is_name != ""){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
                // Surname can't be blank
                $('input[name=surname]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                   if(is_name != ""){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
                // Specialization can't be blank
                $('input[name=specialization]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                    if(is_name != ""){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                   
                });
                // courseName can't be blank
                $('input[name=courseName]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                    if(is_name != ""){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
                // <!--Email must be an email -->
                $('input[name=email]').on('input', function() {
                    var input=$(this);
                    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    var is_email=re.test(input.val());
                    if(is_email != ""){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
                $('input[name=password]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                    if(is_name.length > 5){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
                $('input[name=password_confirmation]').on('input', function() {
                    var input=$(this);
                    var is_name=input.val();
                    if(is_name == $('input[name=password]').val()){
                        input.css("border", "5px solid green");
                    }else{
                        input.css("border", "5px solid red");
                    }
                });
   
        });
    </script>
@endsection