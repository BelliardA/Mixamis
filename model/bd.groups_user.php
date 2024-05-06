<?php

include "bd.inc.php";

function addGroupsUser($mail, $id_group, $is_orga) {
    try {
        $cnx = connexionPDO();
        
        $req = $cnx->prepare("INSERT INTO `groups_user` (mail, id_group, is_orga) VALUES (:mail, :id_group, :is_orga)");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':id_group', $id_group, PDO::PARAM_STR);
        $req->bindValue(':is_orga', $is_orga, PDO::PARAM_BOOL);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}