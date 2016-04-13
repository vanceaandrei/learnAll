@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
                <p>Search
                 </p>
                 <input type="text" id="search" name="course"> 
                 <button class="btn btn-primary " id="demo" onclick="search()">
                    <i class="fa fa-btn fa-search"></i>Search</button> 
                 <script type="text/javascript">
                 function search() {
                        var ceva = document.getElementById("search");
                        alert(ceva.value);
                        //var courses[] = course::where('name','=',ceva.value);
                        // for(var i=0;i<course.length;i++){
                        // }
                        var num_rows = 5;
                        
                        var theader = '<table border="1">\n';
                        var tbody = '';

                        for( var i=0; i<num_rows;i++)
                        {
                            tbody += '<tr>';
                            
                                tbody += '<td>';
                                tbody += '<a href=" {{ url('Courses') }}">'+i+'->'+ceva.value +'  '+ceva.value +'  '+ceva.value+'</a>';
                                tbody += '</td>';
                            
                            tbody += '</tr>\n';
                        }
                        var tfooter = '</table>';
                        document.getElementById('wrapper').innerHTML = theader + tbody + tfooter;
                    }
                 </script>
                 <div id="wrapper"></div>
                 </div>
                </div>
            </div>
            </div>
        @else
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
                            <br>
                            <br>
                            <link rel="stylesheet" href="{{ asset('css/ceva.css') }}" />
                        <div class="calendar">
                            <button id="popupButton" class="btn btn-primary fa fa-plus-square">  Add Course</button>
                        </div>
                        <form class="form-horizontal" method="post" action="">
                            {!!csrf_field()!!}
                        <div class="popup">
                            <h2>   Courses</h2>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="1">
                            </div>
                            </div> 
                            <br>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Ceva</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="2">
                            </div>
                            </div>
                            <br>
                            <label class="col-md-4 control-label">Altceva</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="3">
                            </div>
                            <div class="form-group col-md-4">
                            <input type="submit" class="btn btn-primary">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="row" style="padding-top:15px">
                    <p>Elevi inscrisi</p>
                    <script type="text/javascript">
                 
                        //var courses[] = course::where('name','=',ceva.value);
                        // for(var i=0;i<course.length;i++){
                        // }
                        var num_rows = 5;
                        
                        var theader = '<table border="1">\n';
                        var tbody = '';

                        for( var i=0; i<num_rows;i++)
                        {
                            tbody += '<tr>';
                            
                                tbody += '<td>';
                                tbody += i+'->'+'ceva  ';
                                tbody += '</td>';
                            
                            tbody += '</tr>\n';
                        }
                        var tfooter = '</table>';
                        document.getElementById('wrapper').innerHTML = theader + tbody + tfooter;
                    
                 </script>
                 <div id="wrapper"></div>
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
document.getElementById("activity").onchange = function() {
document.getElementsByClassName("popup")[0].style.display = "none" 
 var selectedValue = this.options[this.selectedIndex].innerHTML;
 if (selectedValue == "work") {
    document.getElementsByClassName("popup")[1].style.display = "block";       
 }
if (selectedValue == "youth leave") {
    document.getElementsByClassName("popup")[2].style.display = "block";       
     }
}
</script>                            
@endsection