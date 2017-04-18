<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <head>
        <meta charset="UTF-8">
        <title>List Demo</title>
        <link rel="stylesheet" type="text/css" href="css/desktop.css">
        <script type="text/javascript" src="js/animations.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    </head>
    <body>
    <header>
        <div class="band1">
            <h1>BDE CESI BORDEAUX</h1>
        </div>

        <!-- ************************************ -->

        <div class="band2">
            <ul class="mainMenu">
                <li><a href="{{ url('/Accueil') }}">Accueil</a></li>
                <li><a href="{{ url('/Activitées') }}">Activitées</a></li>
                <li><a href="{{ url('/Boutiques') }}">Boutiques</a></li>
            </ul>
        </div>

        <!-- ************************************ -->
    </header>

    <div class="container">



    </div>
</nav>
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
        <li><a href="#">Mentions legales</a></li>
    </ul>

    <!-- ************************************ -->
</footer>
</html>