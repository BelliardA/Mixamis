<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

$mail = $_GET['mail'];

if(isset($_POST['code_utilisateur']) && isset($_GET['code'])){
    $code = $_GET['code'];
    if ($_POST['code_utilisateur'] == $code) {
        validerMail($mail);
        header("Location: ./?action=connexion");
    } else {
        $message = "Le code est incorrect.";
    }
}


include "$racine/vue/vueHeader.php";
include "$racine/vue/vueValidMail.php";
