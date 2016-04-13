@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hello professor {{Auth::user()->name}}</div>

                <div class="panel-body"> 
                	<div class="row col-md-12">
                		<div class="col-md-6">
                		@if(count($courses) > 0)
	                		<h3>My courses</h3>
	                		<ul class="list-group">
	                		@foreach($courses as $course)
	                			<li class="list-group-item text-success"> <a href="{{ url('/stream') }}">{{ $course->name }} </a> </li>
	                		@endforeach
	                		</ul>
	                	@endif
	                	</div>
                		
                	</div>
                	<button class="btn btn-primary" id="add"> Add Course </button>
	                <div class="row">
	                	<div class="col-lg-6">
		                	<div class="well bs-component" id="form_div" hidden>
			                	<form class="form-horizontal" method="post" action="{{ url('/home') }}">
			                		{!! csrf_field() !!}
			                		<div class="form-group">
				                		<label for="name" id="nameLabel" class="col-lg-2 control-label"> Name: </label>
				                		<div class="col-lg-10">
				                			<input id="name" name="name" class="col-lg-10 form-control" type="text">
				                			<button type="submit" id="submitted" class="btn btn-primary">Add course</button>
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
@endsection

@section('scripts')

	<script type="text/javascript">
		$("#add").click(function(){
			$("#form_div").show();
			$(this).hide();
		});
		
	</script>

@endsection
