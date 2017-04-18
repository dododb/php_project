<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>List Demo</title>
    <script type="text/javascript" src="/php_project/public/js/animations.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/php_project/public/css/desktopFinalExia.php">
    @if (!Auth::guest())
        @if(Auth::user()->cesi == 'EI')
            <link rel="stylesheet" type="text/css" href="/php_project/public/css/desktopFinalEI.php">
        @endif
    @endif
</head>
<body id="app-layout">
<header>
    <div class="band1">
        <h1>BDE CESI BORDEAUX</h1>
    </div>

    <!-- ************************************ -->

    <div class="band2">
        <ul class="mainMenu">
            <li><a href="{{ url('/accueil') }}">Accueil</a></li>
            <li><a href="{{ url('/activite') }}">Activitées</a></li>
            <li><a href="{{ url('/boutique') }}">Boutique</a></li>
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->nom }} {{ Auth::user()->prenom }}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>

                </li>
            @endif
        </ul>
    </div>

    <!-- ************************************ -->
</header>
<div class="container">
    @yield('content')
</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

<footer>
    <!-- ************************************ -->
    <ul class="bottomMenu">
        <li><a href="#">Contact</a></li>
        <li><a href="#"> Condition de vente </a></li>
        <li><a href="mentions-legales">Mentions legales</a></li>
    </ul>
    <!-- ************************************ -->
</footer>
</html>