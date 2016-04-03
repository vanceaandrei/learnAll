@extends('../layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hello Student</div>
                <div class="panel-body">
                    
                    
                    <button id="stream" class="btn btn-primary"> Go to Stream</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    document.getElementById("stream").onclick = function () {
        location.href = " {{ url('/profile') }}";
    };
</script>
@endsection
