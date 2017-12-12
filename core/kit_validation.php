<?php
/**
 * Created by PhpStorm.
 * User: Comicome
 * Date: 04/12/2017
 * Time: 19:32
 */

include('../config/settings.php');

//si on a recu un formulaire
if(!empty($_POST)) {
    //on cree une variable qui indique s'il y a une erreur
    $error = false;

    //si le titre est vide
    if (empty($_POST['email'])) {
        $error = true;
        //on cree un message d'erreur
        flash_in('error', 'Le mail est obligatoire.');
    }
    //si on a trouve une erreur
    if($error){
        //on redirige vers le formulaire
        redirect('kit-presse.php');
    }
    else{
    //on prepare la requete pour enregistrer
    $add = $db->prepare('INSERT INTO email_data (created, email) VALUES ( NOW(), :email)');
    $add->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $add->execute();

        redirect('../kit-presse-download.php');

    }
}