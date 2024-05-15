<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.inc.php";
include_once "$racine/model/bd.authentification.inc.php";
include_once "$racine/model/bd.users.inc.php";

session_start();
requiredConnexion();

$user = getUsersByMail($_SESSION["mail"]);

$bodyClass = "body-profil";

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueProfil.php";
include "$racine/vue/vueFooter.php";