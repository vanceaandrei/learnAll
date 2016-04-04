@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile Picture</div>
                <div class="panel-body">
                   <!-- <form class="form-horizontal" role="form" action=""> -->
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload image</label>

                            <div class="col-md-6">
                                <input id="input" accept="image/*" type="file">
                                
                                <button id="btn" class="btn btn-primary" onClick="putPicture()">PUT</button>
                            </div>
                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     <a href=" {{ url('profil') }}"><i class="fa fa-btn fa-user"></i>Submit</a>
                                </button>
                            </div>
                        </div> -->
                    <!-- </form> -->
                    <img width="300px" height="400px" id="picture">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	var img = getElementById('picture');
	var input = getElementById('input');
	function putPicture(){
		alert(img.id);
		img.src = input.value;
	}

</script>
@endsection