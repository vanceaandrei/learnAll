@extends('../layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hello {{Auth::user()->name}}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/R044sleOW6I"
                            allowfullscreen
                            ></iframe>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <h1> My Courses</h1>
                            <ul class="list-group">
                                <li class="list-group-item"> Course 1 </li>
                                <li class="list-group-item"> Course 2 </li>
                                <li class="list-group-item"> Course 3 </li>
                                <li class="list-group-item"> Course 4 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="navbar-form navbar-left">
                            <input type="search" class="form-control" placeholder="Search"/>
                            <button class="form-control fa fa-btn fa-search"></button>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"> Course 1 </li>
                        <li class="list-group-item"> Course 2 </li>
                        <li class="list-group-item"> Course 3 </li>
                        <li class="list-group-item"> Course 4 </li>
                    </ul>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection