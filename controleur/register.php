<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

$bodyClass = "body-register";

if (isset($_POST["mail"]) && isset($_POST["password"] )&& isset($_POST["name"]) && isset($_POST["firstname"]) && isset($_POST["school"])){
    $mail=$_POST["mail"];
    $password=$_POST["password"];
    $name=$_POST["name"];
    $firstname=$_POST["firstname"];
    $school=$_POST["school"];
    if(isEtu($mail)){
        register($mail, $password, $name, $firstname, $school);
        // $code = genererCodeAleatoire();
        // $reponse = sendMail($mail, $code);
        // echo $reponse;
        header("Location: ./?action=profil");
    }else{
        $message = "Vous devez avoir une adresse mail d'une université suisse pour vous inscrire";
    }
    
}
else
{
    $mail="";
    $password="";
    $name="";
    $firstname="";
    $school="";
}

include "$racine/vue/vueHeader.php";

if (isLoggedOn()){
    include "$racine/controleur/vueValidConnexion.php";
}
else{
    include "$racine/vue/vueInscription.php";
}
include "$racine/vue/vueFooter.php";


function isEtu($mail){
   // URL de l'API
    $url = 'http://universities.hipolabs.com/search?country=Switzerland';

    // Récupération du contenu de l'URL
    $response = file_get_contents($url);

    // Décodage de la réponse JSON en tableau associatif
    $data = json_decode($response, true);

    $pos = strpos($mail, "@");

    // Extraire ce qui se trouve après le "@"
    $domaine = substr($mail, $pos + 1);

    foreach ($data as $univ){
        if (in_array($domaine, $univ['domains'])){
            return true;
        }elseif('crea-inseec.com' == $domaine){
            return true;
        }else{
            return false;
        }
    }
}

function genererCodeAleatoire($longueur = 6) {
    $caracteres = '0123456789';
    $code = '';
    for ($i = 0; $i < $longueur; $i++) {
        $code .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $code;
}

function sendMail($mail, $code){
    $sujet = "Vérification de votre compte";

    // Contenu de l'e-mail avec le code
    $message = "Bonjour,\n\n";
    $message .= "Voici votre code de vérification : $code\n\n";
    $message .= "Entrez ce code pour vérifier votre compte.";

    // Entête de l'e-mail
    $headers = "From: <support@mixamis.ch>" . "\r\n";

    // Envoyer l'e-mail
    if (mail($mail, $sujet, $message, $headers)) {
        echo "Un e-mail de vérification a été envoyé à votre adresse.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}
