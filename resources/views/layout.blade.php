<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" style="filter: sepia(70%);">
    <div class="container"><a class="navbar-brand logo" href="/">Tareq Sahebzadah</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}" href="/">Home</a></li>
                <li class="nav-item" role="presentation"><a class="{{ Request::path() === 'studiemonitor' ? 'nav-link active' : 'nav-link' }}" href="studiemonitor">Studiemonitor</a></li>
                <li class="nav-item" role="presentation"><a class="{{ Request::path() === 'login' ? 'nav-link active' : 'nav-link' }}" href="login">Log in</a></li>
            </ul>
        </div>
    </div>
    <div id="particles-js"></div>
</nav>
@yield('content')
<footer class="page-footer">
    <div class="container">
        Made with Bootstrap & Laravel. All rights reserved.
        <div class="social-icons"><a href="#"><i class="icon ion-social-github"></i></a></div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particles-config.js"></script>
</body>
</html>
