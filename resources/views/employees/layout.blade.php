<html>
<head>
    <title>Lara Tasks</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    @if( auth()->check() )
        <h5 class="my-0 mr-md-auto font-weight-normal">Hi <strong>{{ auth()->user()->name }}</strong></h5>
        <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-outline-primary" href="/logout">Log Out</a>
    @else
        <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-outline-primary" href="/login">Log In</a> or 
        <a class="btn btn-outline-primary" href="/register">Register</a>
    @endif
    </nav>
</div>
<div class="container">
@yield('content')
</div>

</body>
</html>