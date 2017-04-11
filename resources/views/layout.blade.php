<!DOCTYPE html>
<html lang="en">
<head>
    <title>mvSearch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">mvSearch</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url('/movies')}}">Movies, TV <br> & Showtimes</a></li>
            <li><a href="{{url('/celebs')}}">Celebs , Events <br> $ photos</a></li>
            <li><a href="{{url('/news')}}">News <br> & Community</a></li>
        </ul>
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</nav>



@yield('content')


</body>
</html>








