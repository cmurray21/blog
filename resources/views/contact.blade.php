@extends('main')
@section('title','Contact')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron"><h1>Contact Me</h1></div>
            <div class="form-group">
                <label name="email">Email: </label>
                <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label name="subject">Subject: </label>
                <input id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label name="message">Message: </label>
                <textarea id="message" name="message" class="form-control"></textarea>
                <br>
                <input type="submit" value="Submit" class="btn btn-success">
            </div>
        </div>
    </div>    <!-- end of header row -->
    </div>
@endsection










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  </body>
</html>