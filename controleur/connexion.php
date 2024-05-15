<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

$bodyClass = "body-connexion";

if (isset($_POST["mail"]) && isset($_POST["password"])){
    $mail=$_POST["mail"];
    $mdp=$_POST["password"];
    login($mail,$mdp);
}
else
{
    $mail="";
    $mdp="";
}

include "$racine/vue/vueHeader.php";
if (isLoggedOn()){
    $message = "Connexion réussie";
    header("Location: ./?action=profil");
}
else{
    $message = "Connexion échouée";
    include "$racine/vue/vueConnexion.php";
}
include "$racine/vue/vueFooter.php";