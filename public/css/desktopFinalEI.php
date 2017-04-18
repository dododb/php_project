<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 17/04/2017
 * Time: 16:56
 */

    header('content-type:text/css');
    ob_start('ob_gzhandler');
    header('Cache-Control:max-age=31536000, must-revalidate');

    $BleuFonce = '#004975';
    $BleuClair = '#1b6dab';

    $Fonce =  $BleuFonce;
    $Clair = $BleuClair;

?>

html
{
font-size: 62.5%;
font-size: calc(1em * 0.625);
}

*{
box-sizing: border-box;
margin: 0;
}

body
{
margin: 0;
background: #e6e6e6;
font-family:  'Muli', sans-serif;
height: 100%;
position: relative;
}

.container
{
width: 960px;
margin: auto;
}

a
{
text-decoration: none;
}

h1
{
text-align: center;
color: #FFFFFF;
font-size: 40px;
}

.band1
{
padding: 20px 0px 20px 0px;
background: <?php echo $Clair; ?>;
}

.band2
{
border-top: solid #FFFFFF 5px;
border-bottom: solid #FFFFFF 5px;
background: <?php echo $Fonce; ?>;
font-size: 20px;
}

.mainMenu
{
padding: 0;
text-align: center;
}

.mainMenu li
{

display: inline-block;
text-align: center;
}

.mainMenu li:hover
{
background: <?php echo $Clair; ?>;
}

.mainMenu li a
{
text-decoration: none;
color: #FFFFFF;
text-align: center;
display: block;
padding: 10px 20px 10px 20px;
}

/********************************************************/

footer
{
font-size: 15px;
text-align: center;
background: #FFFFFF;
}

.bottomMenu
{
padding: 0;
text-align: center;
}

.bottomMenu li
{

display: inline-block;
text-align: center;
}

.bottomMenu li:hover
{
background: <?php echo $Clair; ?>;
color: #FFFFFF;
}

.bottomMenu a:hover
{
color: #FFFFFF;
}

.bottomMenu li a
{
text-decoration: none;
color: #000000;
text-align: center;
display: block;
padding: 10px 20px 10px 20px;
}

/*************************Element de la liste d'activité / produit a repetr pour chaque activité / produit*******************************/

/***Boutton ajout d'activité / produit pour les admins***/
.modoButtun
{
text-align: center;
padding-top: 20px;
width: 960px;
height: 70px;
margin: 25px auto 0 auto;
background: #113d08;
color: #FFFFFF;
font-size: 20px;
}

.modoButtun:hover
{
background: #18560a;
}

/*****/
td
{
margin: 0;
}


.elementList
{
width: 960px;
height: 300px;
margin: 25px auto 25px auto;
background: #FFFFFF;
border-bottom: solid <?php echo $Clair; ?>;
}

.elementList img
{
max-width: 225px;
max-height: 225px;
position: relative;
}

#cell1
{
width: 275px;
height: 275px;
text-align: center;
}

#cell2
{
vertical-align: top;
padding-top: 25px;
}

#cell3
{
background: <?php echo $Clair; ?>;
font-size: 20px;
text-align: center;
}

#cell3 a
{
    color : #FFFFFF;
    text-decoration: none;
}

#cell3:hover
{
background: #FFFFFF;
}

#cell3:hover a
{
color : #000000;
text-decoration: none;
}

#cell4
{
width: 150px;
font-size: 15px;
text-align: center;
background: <?php echo $Fonce; ?>;
color: #FFFFFF;
}

#cell4:hover
{
background: #FFFFFF;
color: #000000;
}

h2
{
font-size: 30px;
}

.descriptionElementList
{
padding-top: 25px;
font-size: 20px;
}


.prixElementList
{
vertical-align: bottom;
}

/************************* Page de connection *******************************/

.connectCreate
{
text-align: center;
margin: 25px auto 0 auto;
background: #FFFFFF;
}

.mailAdress
{
font-size: 25px;
padding: 50px 0 25px 0;
}

.password
{
font-size: 25px;
padding: 50px 0 25px 0;

}

.connect
{
padding: 25px 0 25px 0;
}

.facebook
{
background: #3b5998;
font-size: 25px;
padding: 15px 0 15px 0;
color: #FFFFFF;
}

.facebook:hover
{
background: #314a7e;
}



.connectCreateLink
{
margin: 50px 0 0 0;
padding: 15px 0 15px 0;
font-size: 15px;
text-align: center;
background: <?php echo $Clair; ?>;
color: #FFFFFF;
}

.connectCreateLink:hover
{
background: <?php echo $Fonce; ?>;
color: #FFFFFF;
}

/********************************************************/



.produitPresentation
{
margin: 50px 0 0 0;
background: #FFFFFF;
}

.produitPresentation img
{
max-width: 400px;
max-height: 400px;
position: relative;
}

.produitTable
{
width: 960px;
}

#produitImgCell
{
width: 450px;
height: 450px;
text-align: center;
vertical-align: middle;
}

#produitTitreCell
{
padding-top: 50px;
height: 50px;
}

#produitDescCell
{
padding-top: 15px;
vertical-align: top;
font-size: 20px;
}

#produitPrixCell
{
height: 70px;
font-size: 20px;
padding-top: 15px;
text-align: center;
vertical-align: top;
}

#produitAcheCell
{
height: 70px;
font-size: 30px;
text-align: center;
background: <?php echo $Fonce; ?>;
}

#produitAcheCell a
{
color: #FFFFFF;
margin: auto;
}

#produitAcheCell:hover
{
background: <?php echo $Clair; ?>;
}

.DescriptionComplete
{
margin-top: 50px;
padding: 50px;
background: #FFFFFF;
font-size: 15px;
}

.galleriProduit
{
margin-top: 50px;
margin-bottom: 50px;

background: <?php echo $Fonce; ?>;
padding: 15px 0 15px 0;
font-size: 20px;
text-align: center;
color: #FFFFFF;
}

.galleriProduit:hover
{
background: <?php echo $Clair; ?>;
}

/********************************************************/


.gallerieNavigation
{
margin-top: 50px;
padding: 20px;
background: #FFFFFF;
text-align: center;
font-size: 30px;
}

.gallerieNavigation a
{
color: #000000;
}

.nav
{
padding: 0 30px 0 30px;
}

.imageGallerie
{
text-align: center;
vertical-align: middle;
margin-top: 50px;
background: #FFFFFF;
}

#mainImg
{
padding: 25px;
max-width: 910px;
}

.likePhoto
{
width: 960px;
margin-top: 50px;
background: #FFFFFF;
}

#like
{
padding-left: 40px;
font-size: 20px;
}

#heart
{
float: right;
width: 100px;
height: 100px;
text-align: center;
vertical-align: middle;
}

#heart:hover
{
background: #c2242a
}

.heartImg
{
padding-top: 30px;
}

.posterCommentaire
{
margin-top: 50px;
background: #FFFFFF;
border-bottom: solid <?php echo $Fonce; ?>;

}

.nameUser
{
font-size: 20px;
padding: 25px 0 0 40px;
}

.commentaireText
{
border-top: solid <?php echo $Fonce; ?>;
margin-top: 20px;
padding: 10px 0 0 40px;
font-size: 15px;

}

#commentairesArea
{
margin-top: 5px;
resize:none;
width: 880px;
height: 100px;
font-family:  'Muli', sans-serif;
}

.poster
{
margin: 40px 0 30px 40px;
}

.espaceCommentaires
{
background: #FFFFFF;
}

.commentaires
{
padding: 20px 40px 10px 40px;
}
.userCommentaire
{
font-size: 20px;
padding-left: 50px;
padding-bottom: 10px;
}
.textCommentaire
{
font-size: 15px;
padding-bottom: 10px;
}

.deleteCommentaire
{
margin-left: 40px;
}


/***************************************************/

.galeriePhoto
{
margin: 20px 0 50px 0;
width: 960px;
text-align: center;
padding: 25px;
background: #FFFFFF;
}

.galerieTab
{
border-collapse: collapse;
margin: auto;
}

.lineGalerie
{
}

.cellGalerie
{
width: 225px;
height: 225px;
}

.imgGallerie
{
max-width: 200px;
max-height: 200px;
}

.linkBack
{
}

.back
{
margin: 25px 0 0 0;
background: #FFFFFF;
padding: 15px 0 15px 0;
text-align: center;
}
