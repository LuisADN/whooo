<!doctype html>
<html lang="fr">
<head>
    <?php require_once('inc/analytics.php') ?>
    <title>Whooo - Validation</title>
    <meta name="description" content="Avec Whooo, faites partie du monde de demain grâce à un seul voyage vers le planète Kepler-186f !" />
    <meta name="keywords" content="Kepler-186f, whooo, monde de demain, energie, voyage, billets, réservez">
    <?php require_once('inc/head.php') ?>
</head>
<body>
<?php include_once('inc/tag-manager-end.php') ?>
<div id="particles-js"></div>
<?php include_once('inc/modal.php') ?>
<div class="container-validation">
    <header>
        <h1 class="logo"><a href="index.php"><img src="assets/img/logo.svg" alt="Logo Whooo"></a></h1>
        <?php include_once('inc/nav.php') ?>
    </header>

    <div class="content-container">
        <div class="val-box-one">
            <h1><span>Votre participation</span> <br>a bien été enregistrée</h1>
            <p>Vérifiez votre boîte mail pour accéder à votre billet de pré-sélection.</p>
            <p>Le mail  n’apparait pas ? Si vous posséder une adresse gmail, vérifier votre boite "promotion".</p>
        </div>
        <!--<div class="val-box-center"></div>-->
        <div class="val-box-two">
            <h1>Profil des voyageurs déjà sélectionnés</h1>
            <div class="big-percentage">
                <article>
                    <h1>52%</h1>
                    <p>de femmes</p>
                </article>
                <article>
                    <h1>30%</h1>
                    <p>d'hommes</p>
                </article>
                <article>
                    <h1>18%</h1>
                    <p>Autres</p>
                </article>
            </div>
            <div class="small-pecentage">
                <article>
                    <h1><span>45%</span> Hétéros</h1>
                </article>
                <article>
                    <h1><span>30%</span> Homosexuels</h1>
                </article>
                <article>
                    <h1><span>28%</span> Bi-sexuel</h1>
                </article>
            </div>
            <span class="spacer"></span>
            <div class="progress-bars">
                <div class="barra">
                    <h1>Blonds</h1>
                    <div class="barra-nivel" data-nivel="30%"></div>
                </div>
                <div class="barra">
                    <h1>Bruns</h1>
                    <div class="barra-nivel" data-nivel="70%"></div>
                </div>
                <div class="barra">
                    <h1>Roux</h1>
                    <div class="barra-nivel" data-nivel="50%"></div>
                </div>
                <div class="barra">
                    <h1>Châtains</h1>
                    <div class="barra-nivel" data-nivel="80%"></div>
                </div>
            </div>
            <span class="spacer"></span>
            <div class="origines">
                <h1>Origines</h1>
                <div class="origine-wrapper">
                    <div class="progress">
                        <div class="progress-single">
                            <div class="loader" data-percent="15,5%"></div>
                            <span>Europe</span>
                        </div>
                        <div class="progress-single">
                            <div class="loader" data-percent="23,4%"></div>
                            <span>Afrique<br>subsahariens</span>
                        </div>
                        <div class="progress-single">
                            <div class="loader" data-percent="8,2%"></div>
                            <span>Moyen-Orient</span>
                        </div>
                        <div class="progress-single">
                            <div class="loader" data-percent="6,3%"></div>
                            <span>Océanique</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-single">
                            <div class="loader" data-percent="26,4%"></div>
                            <span>Asie de l’Est</span>
                        </div>
                        <div class="progress-single">
                            <div class="loader" data-percent="14,3%"></div>
                            <span>Asie de l’Ouest </span>
                        </div>
                        <div class="progress-single">
                            <div class="loader" data-percent="5,9%"></div>
                            <span>Indien d’amérique</span>
                        </div>
                        <div class="progress-single">
                            <div class="loader loader-none" data-percent=""></div>
                            <span></span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <footer>
        <!--<a class="sound" href="#" alt="">Sound <span><img src="assets/img/icono_sound_on.svg" alt="Som On"></span></a>-->
        <div class="rs">
            <a class="social facebook" href="https://www.facebook.com/Whooo-1924841737530245/" target="_blank">Facebook</a>
            <a class="social twitter" href="https://twitter.com/whooo_fr" target="_blank">Twitter</a>
            <a class="social instagram" href="https://www.instagram.com/whooo_fr/" target="_blank">Instagram</a>
        </div>
    </footer>
</div>





<?php require_once('inc/script.php') ?>
<script>
    $('.progress-single > .loader').each(function() {
        var $this = $(this);
        var svg = `<svg viewBox="-10 -10 220 220">
  <defs>
   <radialGradient id="radial" fx="50%" fy="100%" cx="100%" cy="50%" r="100%">
     <stop offset="20%"   stop-color="#5290f7" stop-opacity="1"/>
     <stop offset="50%" stop-color="#28bd8b" stop-opacity="1" />
   </radialGradient>
 </defs>
  <circle cx="0" cy="0" fill="#eee" fill-opacity="0" r="100" stroke="url(#radial)" stroke-width="10" transform="translate(100, 100)"></circle></svg>`;

        $this.append(svg, svg).find('>svg').last().find('>circle').attr('stroke-dashoffset', -Math.round((parseInt($this.data('percent').replace('%', ''))*629)/100));
    });

</script>
</body>
</html>