<!doctype html>
<html lang="fr">
<head>
    <?php require_once('inc/analytics.php') ?>
    <title>Whooo - Contact</title>
    <meta name="description" content="Avec Whooo, faites partie du monde de demain grâce à un seul voyage vers le planète Kepler-186f !" />
    <meta name="keywords" content="Kepler-186f, whooo, monde de demain, energie, voyage, billets, réservez">
    <?php require_once('inc/head.php') ?>
</head>
<body>
<?php include_once('inc/tag-manager-end.php') ?>
<div id="particles-js"></div>
<?php include_once('inc/modal.php') ?>
<div class="container">
    <header>
        <h1 class="logo"><a href="index.php"><img src="assets/img/logo.svg" alt="Logo Whooo"></a></h1>
        <?php include_once('inc/nav.php') ?>
    </header>

    <div class="contact-form">
        <form action="core/mail.php" method="post" class="contact">
            <span class="contact-field">
					<input required type="text" class="" id="prenom" name="prenom" placeholder="Prénom"/>
            </span>
            <span class="contact-field">
					<input required type="email" class="" id="email" name="email" placeholder="Mail"/>
            </span>
            <span class="contact-field">
                <textarea required class="" type="text" id="message" name="message" placeholder="Message"></textarea>
            </span>
            <button class="btn-submit" type="submit">Envoyer</button>
        </form>
    </div>
    <div class="footer-contact">
        <div class="kit-presse">
            <a href="kit-presse.php" alt="">Télécharger le kit presse</a>
        </div>

        <div class="rs">
            <a class="social facebook" href="https://www.facebook.com/Whooo-1924841737530245/" target="_blank">Facebook</a>
            <a class="social twitter" href="https://twitter.com/whooo_fr" target="_blank">Twitter</a>
            <a class="social instagram" href="https://www.instagram.com/whooo_fr/" target="_blank">Instagram</a>
        </div>
    </div>
</div>

<?php require_once('inc/script.php') ?>
</body>
</html>