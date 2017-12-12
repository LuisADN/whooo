<!doctype html>
<html lang="fr">
<head>
    <?php require_once('inc/analytics.php') ?>
    <title>Whooo - Découvrir le projet</title>
    <meta name="description" content="Avec Whooo, faites partie du monde de demain grâce à un seul voyage vers le planète Kepler-186f !" />
    <meta name="keywords" content="Kepler-186f, whooo, monde de demain, energie, voyage, billets, réservez">
    <?php require_once('inc/head.php') ?>
</head>
<body>
<?php include_once('inc/tag-manager-end.php') ?>
<div id="particles-js"></div>
<?php include_once('inc/modal.php') ?>
<div class="container-two">
    <header>
        <h1 class="logo"><a href="index.php"><img src="assets/img/logo.svg" alt="Logo Whooo"></a></h1>
        <?php include_once('inc/nav.php') ?>
    </header>

    <div class="wrapper">
        <div class="content">
            <span class="us">Découvrir le projet</span>
            <h1>Départ gratuit <br> pour la planète Kepler-186f</h1>
            <div class="border">
                <h2 class="sous-titre">Notre projet</h2>
                <div class="cdt">
                    <p>À la suite de recherches sur la possibilité de vie sur la planète Kepler-186f, nous sommes désormais en mesure de dire que la planète regroupe tous les avantages permettant de la rendre habitable. C’est ainsi que voit le jour le projet Whooo : permettre l’installation de colonies humaines sur Kepler-186f. L’objectif de cette mission d’envergure est de donner à l’humanité l’opportunité d’accéder à une terre plus saine et de recréer une civilisation sans réitérer les erreurs environnementales commises sur notre planète. Afin de peupler la première ville de Kepler-186f, Whooo vous offre l’opportunité de postuler pour faire partie de la première mission et ainsi découvrir les nouveaux paysages de cette exoplanète.</p>
                    <br>
                    <p><a href="#" class="btn-suite lireplus" onclick="document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';">Lire la suite...</a></p>
                    <p id="lirelasuite">Contrairement aux autres projets de colonisations spatiales, l’Organisation Aérospatiale Whooo, propose le départ gratuitement, mais sous réserve d’être sélectionné(e) parmi tous les participants. Nous ne recherchons pas des astronautes, ni des scientifiques, mais des civiles, volontaires, capables de dépasser leurs préjugés et croyances afin d’embarquer littéralement vers un monde unique et favorable. Le voyage est long et sans retour, mais l’avancée historique et humaine, elle, est incommensurable.</p>
                    <img class="cover" src="assets/img/planete.svg">
                </div>
                <h2 class="sous-titre sous-titre-pad-bottom">Nos engagements</h2>
                <!--<div class="pictos-container">-->
                <div class="box">
                    <img src="assets/img/equilibre.svg">
                    <p>Un équilibre parfait de notre écosytème</p>
                </div>
                <div class="box">
                    <img src="assets/img/group.svg">
                    <p>Un monde ne fonctionnant qu’avec des énergies propres</p>
                </div>
                <div class="box">
                    <img src="assets/img/hand.svg">
                    <p>Un climat géopolitique solidaire</p>
                </div>
                <div class="box">
                    <img src="assets/img/people.svg">
                    <p>Une diversité humaine totale et harmonieuse</p>
                </div>
                <!--</div>-->
                <div class="clear"></div>
                <div class="faq">
                    <hr/>
                    <div class="topic">
                        <a href="" class="no-visit" onclick="visibilite('FTAD'); return false;">
                        <h2>Qu'est ce que Kepler et que vais-je y trouver ?</h2>
                        <span class="cross plus"></span>
                        </a>
                        <div id="FTAD" class="Element cdt" style="display:none;">
                            <p>Découverte entre 2009 et 2013 par la NASA, Kepler-186f est une planète rocheuse de la taille de la Terre située dans le système solaire Kepler 186.</p>
                            <p>Entre 2013 et 2017, des analyses sont mises en place pour déterminer les caractéristiques de cette exoplanète.</p>
                            <p>Environ 62 % de la surface de Kepler-186f est recouverte d’eau (soit 9 % de moins que la Terre) mais elle serait aussi présente sous forme de glace. Contrairement à de premières théories, Kepler-186f n’est pas peuplée, mais une flore très variée y a été observée.</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="topic">
                        <a href="" class="no-visit" onclick="visibilite('FTA'); return false;">
                        <h2>Pourquoi participer ?</h2>
                        <span class="cross plus"></span>
                        </a>
                        <div id="FTA" class="Element cdt" style="display:none;">
                            <p>• Votre participation servira l’ensemble de l’humanité</p>
                            <p>• Vous aurez l’occasion de voir ce que personne n’a encore jamais vu</p>
                            <p>• Le voyage est accessible à tous les citoyens, ne se limitant pas qu’aux professions scientifiques ou aux astronautes</p>
                            <p>• Les critères de sélection se feront en fonction de ce que vous êtes en tant qu’êtes humain et ce que vous pouvez apporter à cette nouvelle société</p>
                            <p>• Les moyens mis en place sur la planète vous permettront de conserver un mode de vie équivalent à celui sur la terre mais de façon plus écologique et « propre »</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="topic">
                        <a href="" class="no-visit" onclick="visibilite('FT'); return false;">
                        <h2>C'est pour quand ?</h2>
                        <span class="cross plus"></span>
                        </a>
                        <div id="FT" class="Element cdt" style="display:none;">
                            <p>Une fois que l’ensemble des 300 personnes auront été validées et sélectionnées.</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="topic">
                        <a href="" class="no-visit" onclick="visibilite('F'); return false;">
                        <h2>Comment participer ?</h2>
                        <span class="cross plus"></span>
                        </a>
                        <div id="F" class="Element cdt" style="display:none;">
                            <p>Il vous suffit de remplir le formulaire prévu à cet effet. À la suite de votre inscription, si vous êtes sélectionné(e), vous recevrez un mail qui confirmera la prise en compte de votre participation.</p>
                        </div>
                    </div>
                    <hr/>
                    <div class="topic">
                        <a href="" class="no-visit" onclick="visibilite('FTADD'); return false;">
                        <h2>Quelles sont mes garanties ?</h2>
                        <span class="cross plus"></span>
                        </a>
                        <div id="FTADD" class="Element cdt" style="display:none;">
                            <p>Si vous êtes sélectionné(e) parmi tous les candidats, votre place est assurée gratuitement. L’inscription ne nécessite aucun financement de votre part, et vous pourrez toujours vous rétracter 20 jours avant le grand départ.</p>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="btn-mobile">
                <a class="btn btn-white btn-parti shadow" href="reserver-ma-place.php">Réservez votre billet</a>
                <a class="btn btn-black btn-contact" href="contact.php">Nous contacter</a>
                <a class="btn btn-black btn-home" href="index.php">Retour Accueil</a>
            </div>
            <div class="rs-mobile-contact">
                <a class="social-gris facebook-gris" href="https://www.facebook.com/Whooo-1924841737530245/" target="_blank">Facebook</a>
                <a class="social-gris twitter-gris" href="https://twitter.com/whooo_fr" target="_blank">Twitter</a>
                <a class="social-gris instagram-gris" href="https://www.instagram.com/whooo_fr/" target="_blank">Instagram</a>
            </div>
        </div>
        <aside class="infos">
            <div class="gratuit">
                <p class="tilte-orange-gra">21</p>
                <p class="title-orange">Siècle</p>
            </div>
            <h1 class="temoignage">Témoignage participant</h1>
            <img class="profil" src="assets/img/Ellipse.png">
            <h2 class="perso">Mélanie, 27 ans - Bordeaux</h2>
            <p class="italic">“C’est pour moi une expérience unique et extraordinaire de participer au projet Whooo. Peu d’entre nous aurons l’occasion de réaliser le rêve d’une humanité entière : vivre en dehors de la terre. La planète est très prometteuse et regroupe tous les avantages qui la rendent habitable. Je suis sûre que beaucoup regretteront de ne pas avoir pris leurs places en avance gratuitement… Mais de toute façon j’ai toujours été de nature aventurière et je m’étais toujours dit que si un projet, même fou, se présentait à moi, je n’hésiterais pas une seule seconde à y participer. J’ai la certitude de pouvoir vivre dans un monde meilleur” </p>
            <hr/>
            <div class="aside-btn">
                <a class="btn btn-parti" href="reserver-ma-place.php">Réservez votre billet</a>
                <a class="btn btn-contact" href="contact.php">Nous contacter</a>
                <a class="btn btn-home" href="index.php">Retour Accueil</a>
            </div>
            <hr/>
            <p class="share">Partagez le voyage</p>
            <div class="rs-us">
                <a class="social-gris  facebook-gris" href="https://www.facebook.com/Whooo-1924841737530245/" target="_blank">Facebook</a>
                <a class="social-gris  twitter-gris" href="https://twitter.com/whooo_fr" target="_blank">Twitter</a>
                <a class="social-gris  instagram-gris" target="_blank" href="https://www.instagram.com/whooo_fr/">Instagram</a>
            </div>
        </aside>
    </div>
</div>

<?php require_once('inc/script.php') ?>
<script>
    function visibilite(thingId){
        var targetElement;
        var elements;
        targetElement = document.getElementById(thingId) ;
        // recupere tous les elements ayant pour nom de classe "Element"
        elements = document.getElementsByClassName("Element")

        //affiche l'élément selectionne
        if (targetElement.style.display == "none") {
            targetElement.style.display = ""

        }
        else {
            targetElement.style.display = "none";
        }
    }
</script>
<script>
    $(".plus").click(function(){
        $(this).toggleClass("minus")  ;
    });
    $(".no-visit").click(function(){
        $(this).toggleClass("visited")  ;
    })
</script>

</body>
</html>