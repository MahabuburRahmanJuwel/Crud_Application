<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('student.add')}}" class="nav-link">Add Student</a></li>
            <li><a href="{{route('student.manage')}}" class="nav-link">Manage Student</a></li>
        </ul>
    </div>
</nav>

@yield('content')
<script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
