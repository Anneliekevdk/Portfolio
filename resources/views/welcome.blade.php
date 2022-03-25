<!doctype html>
<html lang="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title')</title>
</head>
<body>

<div class="navContainer">
    <h1 class="title">Software Developer</h1>
    <div class="container navContainer_container">
        <div class="row navContainer_row">
            <div class="col">
                <a href="/" class="homebutton @yield('homeactive')">Home</a>
            </div>
            <div class="col">
                <a href="/projecten" class="homebutton @yield('projectactive')">Projecten</a>
            </div>
            <div class="col">
                <a href="/huisdieren" class="homebutton @yield('huisdieractive')">Huisdieren</a>
            </div>
            <div class="col">
                <a href="/hobbys" class="homebutton @yield('hobbyactive')">Hobby's</a>
            </div>
            <div class="col">
                <a href="/werk" class="homebutton @yield('werkactive')">Werk</a>
            </div>
            <div class="col">
                <a href="/prestaties" class="homebutton @yield('prestatiesactive')">Prestaties</a>
            </div>
        </div>
        <div class="navContainer_pictureContainer">
            <a  href=@yield('link')"\engelsehome"><img src="pictures/engels.png" class="navContainer_pictureContainer_picture"></a>
        </div>
    </div>
</div>


<div class="containerTopbar">
    <div class="nav-container" tabindex="0">
        <div class="nav-toggle"></div>
        <nav class="nav-items">
            <a href="/" ><li class="homebutton @yield('homeTwoactive')">Home</li></a>
            <a href="/projecten" class="homebutton @yield('projectactive')"><li>Projecten</li></a>
            <a href="/hobbys" class="homebutton @yield('hobbyactive')"><li>Hobbys</li></a>
            <a href="/huisdieren" class="homebutton @yield('huisdieractive')"><li>Huisdieren</li></a>
            <a href="/werk" class="homebutton @yield('werkactive')"><li>Werk</li></a>
            <a href="/prestaties"  class="homebutton @yield('prestatiesactive')"><li>Prestaties</li></a>
        </nav>
    </div>
</div>

<div style="margin-top: 2rem;">
    @yield('content')
</div>

<div>
    @yield('footer')
</div>
</body>
<script src="/js/script.js"></script>
</html>
