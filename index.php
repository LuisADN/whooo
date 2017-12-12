<!doctype html>
<html lang="fr">
<head>
    <?php require_once('inc/analytics.php') ?>
    <title>Whooo - Homepage</title>
    <meta name="description" content="Avec Whooo, faites partie du monde de demain grâce à un seul voyage vers le planète Kepler-186f !" />
    <meta name="keywords" content="Kepler-186f, whooo, monde de demain, energie, voyage, billets, réservez">
    <?php require_once('inc/head.php') ?>
</head>
<body>
<?php include_once('inc/tag-manager-end.php') ?>
    <div id="particles-js"></div>
    <div class="title"><h1 >Objectif Kepler-186f</h1></div>
    <?php include_once('inc/modal.php') ?>
    <div class="container">
        <header>
            <h1 class="logo"><a href="index.php"><img src="assets/img/logo.svg" alt="Logo Whooo"></a></h1>
            <?php include_once('inc/nav.php') ?>
        </header>

        <div class="content-container">
            <div class="box-one clearfix">
                <h1>Réservez <span>vos billets</span> dès maintenant</h1>
                <p>Et si l’innovation du 21e siècle commençait par vous ! Tentez d'être sélectionné(e) pour l'unique voyage vers l'exoplanète Kepler-186f.</p>
                <a class="btn-r btn-decouvrir" href="reserver-ma-place.php">Réservez votre billet</a>
                <a class="btn-l btn-qui" href="decouvrir-le-projet.php">Découvrir le projet</a>
            </div>
            <div class="box-two">
                <img src="assets/img/cercle_final.svg" alt="Cercles en mouvement">
                <div class="texte-siecle">
                    <h1 class="grad-text-1">21</h1>
                    <h2>Siècle</h2>
                </div>
            </div>
        </div>

        <footer>
            <a class="sound" href="javascript:void(0)" alt="">Sound <span>
                <img class="music-on" src="assets/img/icono_sound_on.svg" alt="Sound On">
                <img class="music-off" src="assets/img/icono_sound_off.svg" alt="Sound Off"></span>
                <audio
                        src="audio/space_tom.mp3"
                        autoplay
                        loop>
                    Your browser does not support the <code>audio</code> element.
                </audio>
            </a>
            <div class="rs">
                <a class="social facebook" href="https://www.facebook.com/Whooo-1924841737530245/" target="_blank">Facebook</a>
                <a class="social twitter" href="https://twitter.com/whooo_fr" target="_blank">Twitter</a>
                <a class="social instagram" href="https://www.instagram.com/whooo_fr/" target="_blank">Instagram</a>
            </div>
        </footer>
    </div>





    <?php require_once('inc/script.php') ?>
</body>
</html>