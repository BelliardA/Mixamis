<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

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

if (isLoggedOn()){
    $message = "Connexion réussie";
    include "$racine/vue/vueValidConnexion.php";
}
else{
    $message = "Connexion échouée";
    include "$racine/vue/vueConnexion.php";
}