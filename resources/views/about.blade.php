@extends('main')
@section('title','About')
@section('content')
    
    <div class="row">
        <div class="col-md-12">
        <div class="jumbotron"><h1>About {{ $fullname ?? '' }} and {{ $email ?? '' }}</h1></div>
            <p class="lead">I'm a programmer, and my life is kind of crazy!</p></div>
        </div>
    </div>    <!-- end of header row -->
</div><!-- end of .container -->

@endsection