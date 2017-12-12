<!doctype html>
<html lang="fr">
<head>
    <?php require_once('inc/analytics.php') ?>
    <title>Whooo - Réservez votre billet</title>
    <meta name="description" content="Avec Whooo, faites partie du monde de demain grâce à un seul voyage vers le planète Kepler-186f !" />
    <meta name="keywords" content="Kepler-186f, whooo, monde de demain, energie, voyage, billets, réservez">
    <?php require_once('inc/head.php') ?>
</head>
<body>
<?php include_once('inc/tag-manager-end.php') ?>
<div id="particles-js"></div>
<?php include_once('inc/modal.php') ?>
<div class="container-voyage">
    <header>
        <h1 class="logo"><a href="index.php"><img src="assets/img/logo.svg" alt="Logo Whooo"></a></h1>
        <?php include_once('inc/nav.php') ?>
    </header>
    <h1>Réservez votre <span>billet</span></h1>
    <p>Voici nos différents kits de maisons sur Kepler-186f. Selon vos besoins, personnalisez votre maison et participez activement à la conceptualisation de votre espace de vie.</p>
    <div class="form-container">
        <div class="form-container-header">
            <div class="left-side">
                <h1>Planète terre</h1>
                <p>Départ indéterminé</p>
            </div>
            <div class="center-side">
                <img class="change-image" src="assets/img/spaceX.svg" alt="SpaceX Chip">
            </div>
            <div class="right-side">
                <h1>Planète Kepler-186f</h1>
                <p>Arrivée indéterminée</p>
            </div>
        </div>
        <form id="contact_form" action="core/validation.php" method="post" data-parsley-validate>
            <div class="packs">
                <h1>Kit voyageur</h1>
                <p>Voici nos différents kits de maisons sur Kepler-186f. Selon vos besoins, personnalisez votre maison et participez activement à la conceptualisation de votre maison.
                </p>
                <div class="packs-container">
                    <article>
                        <div class="packs-box shadow">
                            <h1>Kit Woody cedar house</h1>
                            <figure>
                                <img src="assets/img/kit-1.jpg" alt="Pack 1">
                            </figure>
                            <h2>La maison en bois</h2>
                            <p>La maison en bois c’est le confort au quotidien, spécialement conçue pour les personnes en quête d’authenticité.</p>
                            <a class="popup-trigger" data-js="open" href="javascript:void(0)">En savoir +</a>
                            <div class="popup">
                                <div class="popup-wrapper">
                                    <img src="assets/img/kit-1.jpg" alt="">
                                    <div class="popup-wrapper-content">
                                        <h1>Kit Woody cedar house</h1>
                                        <h2>Description de l’habitat</h2>
                                        <p>Le kit « Woody cedar house » crée un environnement chaleureux avec un style architectural classique. Le bois offre à votre maison un aspect harmonieux et authentique et procure une sensation de bien-être. Ce choix de construction est énergiquement économique, le bois garantit une parfaite isolation thermique, permettant ainsi de minimiser la consommation énergétique. Une maison en bois présente plus de longévité que n’importe quel autre matériau de construction, à condition que les entretiens nécessaires soient respectés.</p>
                                        <span>Châlet en bois</span>
                                        <ul>
                                            <li>Poêle à bois</li>
                                            <li>Isolant intérieur : laine de verre</li>
                                            <li>Isolant extérieur : laine naturelle</li>
                                            <li>Panneaux photovoltaïques</li>
                                            <li>Ampoules halogènes</li>
                                        </ul>
                                        <a class="check-pack" id="radio-trigger-1" >Choisir ce kit</a>
                                    </div>
                                    <a class="popup-btn-close"><img src="assets/img/cross-popup.svg" alt=""></a>
                                    <img class="arrows-prev" data-target="" src="assets/img/left_arrow.svg" alt="">
                                    <img class="arrows-next" data-target="" src="assets/img/right_arrow.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <label class="check-pack" id="radio-1" for="pack1">Choisir ce kit<input type="radio" name="pack" id="pack1" value="pack1" required/></label>
                    </article>

                    <article>
                        <div class="packs-box shadow">
                            <h1>Kit Contain’Art house</h1>
                            <figure>
                                <img src="assets/img/kit-2.jpg" alt="Pack 2">
                            </figure>
                            <h2>La maison conteneur</h2>
                            <p>La maison conteneur c’est la maison contemporaine avec un parti pris artistique.</p>
                            <a class="popup-trigger" data-js="open" href="javascript:void(0)">En savoir +</a>
                            <div class="popup">
                                <div class="popup-wrapper">
                                    <img src="assets/img/kit-2.jpg" alt="">
                                    <div class="popup-wrapper-content">
                                        <h1>Kit Contain’Art house</h1>
                                        <h2>Description de l’habitat</h2>
                                        <p>Le kit « Contain’Art house » est la solution emblématique de la construction à partir de matériaux recyclés. Il est possible de superposer ou juxtaposer plusieurs conteneurs en métal pour agrandir votre espace habitable. Vous pouvez vous créer un logement design avec vos conteneurs grâce à leurs formes géométriques facilement exploitables. Assurez à votre logement une belle cohérence esthétique et pratique !</p>
                                        <span>Maison conteneur</span>
                                        <ul>
                                            <li>Pompe à chaleur</li>
                                            <li>Isolation intérieur : mousse polyuréthane</li>
                                            <li>Isolant extérieur : laine de roche</li>
                                            <li>Toit végétal (type expansif - peu d’entretien)</li>
                                            <li>Ampoules néons</li>
                                        </ul>
                                        <a class="check-pack" id="radio-trigger-2" >Choisir ce kit</a>
                                    </div>
                                    <a class="popup-btn-close"><img src="assets/img/cross-popup.svg" alt=""></a>
                                    <img class="arrows-prev" data-target="" src="assets/img/left_arrow.svg" alt="">
                                    <img class="arrows-next" data-target="" src="assets/img/right_arrow.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <label class="check-pack" id="radio-2" for="pack2">Choisir ce kit<input type="radio" name="pack" id="pack2" value="pack2"/></label>
                    </article>

                    <article>
                        <div class="packs-box shadow">
                            <h1>Kit Moon house</h1>
                            <figure>
                                <img src="assets/img/kit-3.jpg" alt="Pack 3">
                            </figure>
                            <h2>La maison dôme</h2>
                            <p>La maison dôme est le concept d’habitation original et convivial !</p>
                            <a class="popup-trigger" data-js="open" href="javascript:void(0)">En savoir +</a>
                            <div class="popup">
                                <div class="popup-wrapper">
                                    <img src="assets/img/kit-3.jpg" alt="">
                                    <div class="popup-wrapper-content">
                                        <h1>Kit Moon house</h1>
                                        <h2>Description du lieu</h2>
                                        <p>Le kit « Moon house » est le concept architectural original, la forme en sphère de son habitation, apporte un côté convivial et protecteur. Cette maison offre tout le confort nécessaire possible, et assure une bonne gestion de votre espace.</p>
                                        <span>Maison dôme</span>
                                        <ul>
                                            <li>Chaudière basse température</li>
                                            <li>Isolant intérieur : laine de chanvre</li>
                                            <li>Isolant extérieur : terre cuite</li>
                                            <li>Panneaux solaires photovoltaïques hybrides</li>
                                            <li>Ampoules LED</li>
                                        </ul>
                                        <a class="check-pack" id="radio-trigger-3" >Choisir ce kit</a>
                                    </div>
                                    <a class="popup-btn-close"><img src="assets/img/cross-popup.svg" alt=""></a>
                                    <img class="arrows-prev" data-target="" src="assets/img/left_arrow.svg" alt="">
                                    <img class="arrows-next" data-target="" src="assets/img/right_arrow.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <label class="check-pack" id="radio-3" for="pack3">Choisir ce kit<input type="radio" name="pack" id="pack3" value="pack3"/></label>
                    </article>

                    <article>
                        <div class="packs-box shadow">
                            <h1>Kit float house</h1>
                            <figure>
                                <img src="assets/img/kit-4.jpg" alt="Pack 4">
                            </figure>
                            <h2>La maison flottante</h2>
                            <p>Soyez loin de l’effervescence de la ville avec ce cocon flottant !</p>
                            <a class="popup-trigger" data-js="open" href="javascript:void(0)">En savoir +</a>
                            <div class="popup">
                                <div class="popup-wrapper">
                                    <img src="assets/img/kit-4.jpg" alt="">
                                    <div class="popup-wrapper-content">
                                        <h1>Kit float house</h1>
                                        <h2>Description du lieu</h2>
                                        <p>Le kit « float house » c’est l’excellence en flottaison, l’habitation est conçue pour être installée sur l’eau, en harmonie avec la nature. La maison flottante est légère accompagnée d’un jardin en permaculture elle se veut comme être un exemple en terme d’écologie et d’autonomie.</p>
                                        <span>Maison flottante</span>
                                        <ul>
                                            <li>100% électrique</li>
                                            <li>1,5 tonne de batterie dans les flotteurs</li>
                                            <li>Isolant extérieur : aluminium</li>
                                            <li>Panneaux solaires photovoltaïques hybrides</li>
                                            <li>Ampoules basses consommations</li>
                                        </ul>
                                        <a class="check-pack" id="radio-trigger-4" >Choisir ce kit</a>
                                    </div>
                                    <a class="popup-btn-close"><img src="assets/img/cross-popup.svg" alt=""></a>
                                    <img class="arrows-prev" data-target="" src="assets/img/left_arrow.svg" alt="">
                                    <img class="arrows-next" data-target="" src="assets/img/right_arrow.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <label class="check-pack" id="radio-4" for="pack4">Choisir ce kit<input type="radio" name="pack" id="pack4" value="pack4"/></label>
                    </article>
                </div>
            </div>

            <div class="form-container-body">
                <h1>Informations voyageur</h1>
                <div class="inputs">
                    <input class="form-control" type="text" name="prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <div class="calendar-picto" >
                        <input data-toggle="datepicker" name="birthday" placeholder="Date de naissance" required>
                        <img src="assets/img/calendar.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="btn-align">
                <span class="tooltiptext">Vous devez selectionner un pack</span>
                <input id="contact_form_btn" type="submit" value="Valider ma réservation">
            </div>
        </form>
    </div>
</div>




    <?php require_once('inc/script.php') ?>
</body>
</html>