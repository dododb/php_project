@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="gallerieNavigation">
            <a href=""><img src="img/site/g.png" class="nav"></a>
            <a href="">Galerie</a>
            <a href=""><img src="img/site/d.png" class="nav"></a>
        </div>

        <div class="imageGallerie">
            <img src="http://www.planwallpaper.com/static/images/6944150-abstract-colors-wallpaper_kYyj1ZQ.jpg" id="mainImg">
        </div>

        <table class="likePhoto">
            <td id="like">
                X LIKES
            </td>
            <td id="heart" onclick="like();">
                <img src="img/site/h2.png" class="heartImg" id="heartImg">
            </td>
        </table>

        <div class="posterCommentaire">
            <div class="nameUser">UserName</div>
            <div class="commentaireText">
                Commentaire<br>
                <textarea id="commentairesArea"></textarea>
            </div>
            <button class="poster">Poster</button>
        </div>

        <div class="espaceCommentaires">
            <div class="commentaires">
                <div class="userCommentaire">User</div>
                <p class="textCommentaire">Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.

                    Iamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.</p>
            </div>
            <!-- En admin ajouter <button class="deleteCommentaire">delete</button> après chaque div -->

        </div>
    </div>

@endsection