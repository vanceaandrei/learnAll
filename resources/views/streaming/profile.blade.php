@extends('../layouts.app');

@section('styles')

	<link rel="stylesheet" href=" {{ URL::Asset('css/myStyles.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->roles()->first()->display_name}} {{Auth::user()->name }}</div>

                <div class="panel-body">
                    <video autoplay id="local" class="localVideo invert">

                    </video>
                    <video  autoplay id="client" class="clientVideo">

                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	var video = document.getElementById("local");
	var video2 = document.getElementById("client");
	 
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
	 
	if (navigator.getUserMedia) {       
	    navigator.getUserMedia({video: true}, handleVideo, videoError);
	}
	function handleVideo(stream) {
	    video.src = window.URL.createObjectURL(stream);
	    video2.src = window.URL.createObjectURL(stream);
	}
	 
	function videoError(e) {
	    // do something
	}

</script>
@endsection