<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

if (isset($_POST["mail"]) && isset($_POST["password"] )&& isset($_POST["name"]) && isset($_POST["firstname"]) && isset($_POST["school"])){
    $mail=$_POST["mail"];
    $password=$_POST["password"];
    $name=$_POST["name"];
    $firstname=$_POST["firstname"];
    $school=$_POST["school"];
}
else
{
    $mail="";
    $password="";
    $name="";
    $firstname="";
    $school="";
}



register($mail, $password, $name, $firstname, $school);

if (isLoggedOn()){
    include "$racine/controleur/vueValidConnexion.php";
}
else{
    include "$racine/vue/vueConnexion.php";
}

