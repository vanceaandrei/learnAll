@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Pagina de home pentru student  -->
            @if(Auth::user()->hasRole('stud'))
            <div class="panel panel-default">
                <div class="panel-heading">
                        {{Auth::user()->name}} {{Auth::user()->surname}}
                </div>

                <div class="panel-body">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <p>Photo</p>
                                <img width = "400px" height = "150px" src={{Auth::user()->name}}>
                        </div>
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <p>Email</p> {{Auth::user()->email}}
                        </div>
                    </div>
                    <div class="row" style="padding-top:15px">
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            
                            @if(count($courses) > 0)
                                    <h3>My courses</h3>
                                   
                                        {!!csrf_field()!!}
                                    <ul class="list-group">                                        
                                    @foreach($courses as $course)                                        
                                        <li class="list-group-item text-success"> <a href="{{ url('/stream') }}"> {{ $course->name }} </a> 
                                            <input name="id" value="{{$course->id}}" type="text" hidden>
                                            
                                        </li>
                                    @endforeach
                                    </ul>
                                @endif              
                        </div>
                    </div>
                </div>
            </div>
        @else
        <!-- Pagina de home pentru profesor -->
            <div class="panel panel-default">
                <div class="panel-heading">
                        {{Auth::user()->name}} {{Auth::user()->surname}}
                </div>
            
                <div class="panel-body">
                    <div class = "row">
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <p>Photo</p>
                                <img width = "400px" height = "150px" src={{Auth::user()->name}}>
                                 <div class="row" style="padding-top:15px">
                                    <h3>  Elevi inscrisi</h3>
                    
                                </div>
                        </div>
                    <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <p>Email</p> {{Auth::user()->email}}
                            <br>
                            <br>
                            <!-- Lista cursurilor  -->

                            <div class="col-md-12">
                                @if(count($courses) > 0)
                                    <h3>My courses</h3>
                                    <form class="form-horizontal" method="post" action="/delete">
                                        {!!csrf_field()!!}
                                    <ul class="list-group">                                        
                                    @foreach($courses as $course)                                        
                                        <li class="list-group-item text-success"> <a href="{{ url('/stream') }}"> {{ $course->name }} </a> 
                                            <input name="id" value="{{$course->id}}" type="text" hidden>
                                            <button type="submit" style="float:right" class="fa fa-trash" aria-hidden="true"></button>
                                        </li>
                                    @endforeach
                                    </ul>
                                </form>
                                @endif
                            </div>

                            <br>
                            <!-- Adauga curs -->
                            <link rel="stylesheet" href="{{ asset('css/ceva.css') }}" />
                     <div class="row" >
                        <div class = "col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <div id="add_btn" class="buton">
                            <button id="popupButton" class="btn btn-primary fa fa-plus-square">  Add Course</button>
                        </div>
                        <div id="popupDiv">
                        <form class="form-horizontal" method="post" action="">
                            {!!csrf_field()!!}
                        <div class="popup">
                            <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="course_name">
                            </div>
                            </div> 
                            <br>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6 col-lg-6 ">
                                    <button name="add_course" type="submit" class="btn btn-primary" onClick="return isok()">Add Course</button>
                                </div>
                                
                        </div>
                        </form>
                        </div>
                        </div>
                      
                     </div>
                        
                    </div>
                    
                    </div>
               
            </div>
            </div>
        @endif
        <br/>
        <button id="stream" class="btn btn-primary"> Go to your Stream</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    document.getElementById("stream").onclick = function () {
        location.href = " {{ url('/stream') }}";
    };
</script>

<script type="text/javascript">

document.getElementById("popupButton").onclick = function() {
 document.getElementsByClassName("popup")[0].style.display = "block"    
 }

 $('#popupDiv')

</script>
<script type="text/javascript">
var ok = false;
$(document).ready(function() {
    $('#course_name').on('input', function() {
                        var input=$(this);
                        var is_name=input.val();
                        if(is_name.length > 0 && is_name.length < 25){
                            input.css("border", "5px solid green");
                            ok = true;
                        }else{
                            input.css("border", "5px solid red");
                            ok = false;
                        }
                    });
});

function isok(){
    if(ok != true){
        alert("Please insert a course name");
    }
    return ok;
}

</script>                            
<script type="text/javascript">
$("#add_btn").click(function(){
    $(this).hide();
});
</script>

@endsection