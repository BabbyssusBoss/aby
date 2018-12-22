

<!doctype html>
<html lang="fr">

<!-- Mirrored from s1.abyssus.games/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jun 2018 12:21:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="WjxTbNFrIATvcSbPehUsujP2c62qwG_Ctj5Op1Jp2Sw" />
    <meta property="og:url"                content="https://www.abyssus.games/" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Abyssus" />
    <meta property="og:description"        content="Abyssus est un jeu de stratégie où vous controlez la faune marine. Confronté à des milliers d'autres joueurs et aux prédateurs sauvages, il vous faudra une armée puissante et de fidèles alliés pour dominer ces eaux." />
    <meta property="og:image"              content="../www.abyssus.games/facebook_partage.jpg" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:image:width" content="1200" />

    <meta property="og:image:height" content="630" />

    <title>Abyshelp - Site d'aide pour abyssus</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <link href="jquery-ui.css" rel="stylesheet">
    <link href="style-index2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers%7CAnton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="flipclock/flipclock.css">
    <link rel="alternate" hreflang="fr-be, fr-ca" href="alternateURL.html">

    <script src="external/jquery/jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="external/sha512.js"></script>

    <script src="flipclock/flipclock.js"></script>

</head>
<body>
<div id="hauttel"><img src="images/bantel.jpg" style="height: auto; width: 100%" alt="banniere"></div>
<div id="haut"></div>

<div id="menu">

    <a href="index.php"><div class="onglet">Home</div></a>
    <a href="flood.php"><div class="onglet">flood</div></a>
    <a href="simulateur.php"><div class="onglet">Simulateur</div></a>
    <a href="trajets.php"><div class="onglet">Temps de trajet</div></a>
    <a href="http://forum.abyssus.games/" target="_blank"><div class="onglet">Les dev</div></a>

    <div style="clear: both;"></div>


</div>

<div id="bas">


    <div id="contenu" style="text-align: center;">


        <p>
           Entrer votre armée pour connaitre sa consommation journalière<br />
        </p>

        <form action="cible.php" method="post">

            <label for="prm">indiqué le prix de création d'un requin marteau :</label>
            <input type="int" id="prm" name="prm" value="0"> <br>
            <p>
                <label for="r">remora :</label>
                <input type="int" id="r" name="r" value="0"> <br>
                <label for="pr">petite rousette :</label>
                <input type="int" id="pr" name="pr" value="0"> <br>
                <label for="rou">rousette :</label>
                <input type="int" id="rou" name="rou" value="0"> <br>
                <label for="gr">grande rousette :</label>
                <input type="int" id="gr" name="gr" value="0"> <br>
                <label for="rp">requin pélerin :</label>
                <input type="int" id="rp" name="rp" value="0"> <br>
                <label for="mu">murène :</label>
                <input type="int" id="mu" name="mu" value="0"> <br>
                <label for="me">murène électrique :</label>
                <input type="int" id="me" name="me" value="0"> <br>
                <label for="rm">requin marteau :</label>
                <input type="int" id="rm" name="rm" value="0" > <br>
                <label for="rl">requin lézard :</label>
                <input type="int" id="rl" name="rl" value="0" > <br>
                <label for="rlv">requin lézard véteran :</label>
                <input type="int" id="rlv" name="rlv" value="0" > <br>
                <label for="rb">requin blanc :</label>
                <input type="int" id="rb" name="rb" value="0" > <br>
                <label for="grb">grand requin blanc :</label>
                <input type="int" id="grb" name="grb" value="0" > <br>
                <label for="k">kraken :</label>
                <input type="int" id="k" name="k" value="0" > <br>
                <label for="ki">kraken immortel :</label>
                <input type="int" id="ki" name="ki" value="0" > <br>
                <input type="submit" value="Valider" />
            </p>
        </form>



    </div>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112072554-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112072554-1');
    </script>


</body>

<!-- Mirrored from s1.abyssus.games/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jun 2018 12:21:06 GMT -->
</html>
