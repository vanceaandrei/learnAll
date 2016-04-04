@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">LearnAll</div>

                <div class="panel-body">
                    @if(Auth::user()->hasRole('prof'))
                        You are logged in as professor!
                    @else
                        You are logged in as student!
                    @endif
                    <br/>
                    <button id="stream" class="btn btn-primary"> Go to Stream</button>
                </div>
            </div>
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
