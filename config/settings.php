<?php
session_start();

define("SQL_HOST", "localhost");
define("SQL_USER","root");
define("SQL_PASS","");
define("SQL_DBNAME","whooo");

try {
    $db = new PDO("mysql:dbname=" . SQL_DBNAME . ";charset=utf8;host=" . SQL_HOST, SQL_USER, SQL_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

include('functions.php');