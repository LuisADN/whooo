<?php

/*var_dump($_POST);
die();*/

include('../config/settings.php');

if (empty($_POST)) {
    redirect('../voyage.php');
} else {
    $error = false;
    if (empty($_POST['nom'])) {
        $error = true;
        flash_in('error', 'Le nom est obligatoire.');
    }
    if (empty($_POST['prenom'])) {
        $error = true;
        flash_in('error', 'Le prénom est obligatoire.');
    }
    if (empty($_POST['email'])) {
        $error = true;
        flash_in('error', 'L\'adresse email est obligatoire');
    }
    if (empty($_POST['birthday'])) {
        $error = true;
        flash_in('error', 'La date de naissance est obligatoire.');
    }
    if (empty($_POST['pack'])) {
        $error = true;
        flash_in('error', 'Vous devez choisir un pack voyage.');
    }


    //si on a au moin une erreur
    if ($error) {
        // on redirige vers le form
        redirect('../reserver-ma-place.php');
    } else {
        // ID Participant
        $idParticipant = rand ( 10000 , 90000 );
        $date = date("d/m/Y");

        // MailChimp API credentials
        $apiKey = '91e3f93d3660e3268b19a98d5a41459c-us17';
        $listID = '4902df197a';
        // MailChimp API URL
        $fname = $_POST['prenom'];
        $lname = $_POST['nom'];
        $email = $_POST['email'];
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $fname,
                'LNAME'     => $lname,
                'IDPAR'     => $idParticipant,
                'DATEH'     => $date
            ]
        ]);

        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);


        $var = $_POST['birthday'];
        $replacer = str_replace('/', '-', $var);
        $date = date('Y-m-d', strtotime($replacer));

        $add = $db->prepare('INSERT INTO voyageurs (prenom, nom, email, birthday, pack, id_participant, created_date)
    VALUES (:prenom, :nom, :email, :birthday, :pack, :id_participant, NOW())');
        // on ajoute les parametres (données du formumaires)
        $add->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
        $add->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
        $add->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $add->bindParam(':birthday', $date, PDO::PARAM_STR);
        $add->bindParam(':pack', $_POST['pack'], PDO::PARAM_STR);
        $add->bindParam(':id_participant', $idParticipant, PDO::PARAM_INT);
        $add->execute();

        //flash_in('success', 'Article créé avec success!');
        redirect('../validation.php');

    }
}
