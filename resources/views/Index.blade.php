<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>List Demo</title>
    <link rel="stylesheet" type="text/css" href="/php_project/public/css/desktopFinal.php">
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
            <li><a href="{{ url('/accueil') }}">Accueil</a></li>
            <li><a href="{{ url('/activite') }}">Activitées</a></li>
            <li><a href="{{ url('/boutique') }}">Boutique</a></li>
        </ul>
    </div>

    <!-- ************************************ -->
</header>

<div class="container">
    {{$object->echoObject()}}
</div>

<footer>
    <!-- ************************************ -->
    <ul class="bottomMenu">
        <li><a href="#">Contact</a></li>
        <li><a href="#"> Condition de vente </a></li>
        <li><a href="#">Mentions legales</a></li>
    </ul>

    <!-- ************************************ -->
</footer>

</body>
