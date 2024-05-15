<?php

include "bd.inc.php";

function getCategories() {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from categories");
        $req->execute();
        
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getCategoryByID($id) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from categories where id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}