<?php

include_once "bd.inc.php";

function getUsers() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from users");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUsersByMail($mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from users where mail=:mail");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUsers($ulid, $mail, $password, $name, $firstname, $school) {
    try {
        $cnx = connexionPDO();

        $passwordCrypt = password_hash($password, PASSWORD_DEFAULT);
        $req = $cnx->prepare("insert into users (id, mail, password,name, first_name, school) values(:id, :mail,:password, :name, :firstname, :school)");
        $req->bindValue(':id', $ulid, PDO::PARAM_STR);
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':password', $passwordCrypt, PDO::PARAM_STR);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':school', $school, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}