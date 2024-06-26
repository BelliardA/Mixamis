<?php

include_once "bd.users.inc.php";

function login($mail, $mdp) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUsersByMail($mail);
    if ($util) {
        $mdpBD = $util["password"];
        
        if (password_verify($mdp, $mdpBD)) {
            // Le mot de passe est correct
            $_SESSION["mail"] = $mail;
            echo $_SESSION["mail"];
            return true;
        }
    }
    return false;
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION["mail"]);
}

function requiredConnexion() {
    if (!isLoggedOn()) {
        header("Location: ./?action=connexion");
        exit();
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mail"]);
    unset($_SESSION["mdp"]);
}

function register($mail, $password, $name, $firstname, $school) {
    $ulid = generateULID();
    return addUsers($ulid ,$mail, $password, $name, $firstname, $school);
}

function generateULID() {
    // Génère un timestamp en millisecondes depuis l'époque UNIX
    $time = microtime(true) * 1000;

    // Convertit le timestamp en chaîne
    $timeStr = strval($time);

    // Génère une chaîne aléatoire de 16 caractères en base 36 (en minuscules)
    $randomStr = '';
    for ($i = 0; $i < 16; $i++) {
        $randomStr .= base_convert(mt_rand(0, 35), 10, 36);
    }

    // Concatène le timestamp et la chaîne aléatoire
    $ulid = $timeStr . $randomStr;

    return $ulid;
}

function dateFormat($date) {
    $date = new DateTime($date);
        $formattedDate = $date->format('d F \à H\hi');
    $months = [
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre'
    ];
    return strtr($formattedDate, $months);
}
