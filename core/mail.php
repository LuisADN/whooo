<?php

/*var_dump($_POST);
die();*/

include('../config/settings.php');

if (empty($_POST)) {
    redirect('../mail.php');
} else {
    $error = false;
    if (empty($_POST['prenom'])) {
        $error = true;
        flash_in('error', 'Le prenom est obligatoire.');
    }
    if (empty($_POST['email'])) {
        $error = true;
        flash_in('error', 'L\'adresse email est obligatoire.');
    }
    if (empty($_POST['message'])) {
        $error = true;
        flash_in('error', 'Le message est obligatoire.');
    }


    //si on a au moin une erreur
    if ($error) {
        // on redirige vers le form
        echo "Not OK";
        //redirect('../voyage.php');
    } else {

        $webmaster_email = "mosquito.agence@gmail.com";
        $email_address = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $name = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
        $comments = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        mail( "$webmaster_email", $name ." avec l'adresse mail ". $email_address ." vous a contacte via votre site.",
            $comments, "From: $email_address" );

        //flash_in('success', 'Article créé avec success!');
        redirect( "../contact.php");

    }
}








