<?php

//on cree une fonction qui prend en parametre une date au format informatique, et qui nous donne la date au format européen
//si la date est vide, elle nous donne 'n.c.'
//on rajoute le parametre hour qui est désactiver par défault
function dateEU($input, $hour = false){
    if(empty($input))
        return 'n.c.';
    else{
        //on cree un objet de temps
        $time =new DateTime($input);
        //si on  souhaite avoir l'heure
        if($hour)
            return $time->format('d/m/Y h:i');
        //on retourne le format européen
        else
            return $time->format('d/m/Y');
    }

}
//on cree une fonction qui redirige l'utilisateur eet arrete l'execution de la page

function redirect($page){
    //redirection
    header('Location: '.$page);
    //on bloque le reste des execution
    exit();
}

//on cree une fonction qui prend en charge le nom de l'image à afficher
function cover($img, $back = false){
//si le nom de cette image est vide il affiche l'ilage par default
    $root = '';
    if($back)
        $root="../";

    if(empty($img))
        return $root.'img/default.jpg';
//sinon elle affiche le chemin vers cette image
    else
        return $root.'data/projets/'.$img;
}
function icon($img, $back = false){
//si le nom de cette image est vide il affiche l'ilage par default
    $root = '';
    if($back)
        $root="../";

    if(empty($img))
        return $root.'img/default.jpg';
//sinon elle affiche le chemin vers cette image
    else
        return $root.'data/icons/'.$img;
}
function cryptPassword($string){
    //on crypte une première fois avec sha512
    $first = hash('sha512',$string);
    //on ajoute un salt
    $first = $first.'A213PR';
    //on crypte une deuxieme fois
    $final = hash('sha512',$first);

    return $final;



    //forme contracté : return hash('sha512',hash('sha512',$string).'A213PR');
}

/* on cree une fonction qui permet d'enregistrer un message en memoire, elle prend deux paramètres :
 	$type qui correspond au type de message : "error" ou "sucess"
 	$message, le message à écrire*/

 	function flash_in($type,$message){
        // si la case du type n'existe pas; on l'a crée
        if(empty( $_SESSION['message'][$type]))
            $_SESSION['message'][$type]=[];

        // on met le message dans la case, à la suite des autres
        array_push($_SESSION['message'][$type],$message);
    }

 	/* flash_out ecrit tous les messages en attente, puis les effaces de la mémoire */

 	function flash_out(){
        if(!empty($_SESSION['message']))
            foreach ($_SESSION['message'] as $key => $value)
                foreach ($value as $message)
                    echo '<p class="alert alert-'.$key.'">'.$message.'</p>';

        $_SESSION['message']=[];

    }

