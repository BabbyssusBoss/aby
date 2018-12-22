

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
        <?php
        $prm = $_POST['prm'];
        $r = $_POST['r'] * 5 * 7.2 / 4;
        $pr = $_POST['pr'] * 100 * 7.2 / 4;
        $rou = $_POST['rou'] * 250 * 7.2 / 4;
        $gr = $_POST['gr'] * 500 * 7.2 / 4;
        $rp = $_POST['rp'] * 2500 * 7.2 / 4;
        $mu = $_POST['mu'] * 5333 * 7.2 / 4;
        $me = $_POST['me'] * 6666 * 7.2 / 4;
        $rm = $_POST['rm'] * $prm * 7.2 / 4;
        $rl = $_POST['rl'] * 13333 * 7.2 / 4;
        $rlv = $_POST['rlv'] * 20000 * 7.2 / 4;
        $rb = $_POST['rb'] * 20000 * 7.2 / 4;
        $grb = $_POST['grb'] * 26666 * 7.2 / 4;
        $k = $_POST['k'] * 4150000000 * 7.2 / 4;
        $ki = $_POST['ki'] * 4150000000 * 7.2 / 4;
        $result = $r + $pr + $rou + $gr + $rp +$mu + $me+ $rm + $rl + $rlv + $rb + $grb + $k + $ki;
        $test = number_format($result,0," ", " ");
        ?>




        <p>Bonjour !</p>

        <p>tu consomme <?php echo $test ?> <img src="images/nouriture.png" alt="nourriture" height="25" style="vertical-align:middle; margin-right:0px;"> toute les 24heures !</p>

        <p>Retour à la page de calcul <a href="simulateur.php">clique ici</a> pour garder les armées rentrer retour onglet.</p>

        <br/>




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
