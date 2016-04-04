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
@endsection