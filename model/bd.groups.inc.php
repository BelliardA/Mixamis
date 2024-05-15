<?php

include "bd.inc.php";

function getGroups() {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from groupes");
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

function getGroupPublic(){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select g.*, a.id_category from groupes g JOIN activities a ON a.id = g.id_activity where is_public=1");
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

function getGroupsById($id) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from groupes where id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function isOrgaByMail($mail, $idGroup){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select is_orga from groups_user where mail=:mail and id_group=:idGroup");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':idGroup', $idGroup, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;

}

function addGroups($ulid, $name, $is_public ,$description, $activity_id) {
    try {
        $cnx = connexionPDO();
        
        $req = $cnx->prepare("INSERT INTO `groupes` (id, name, is_public, description, id_activity) VALUES (:id, :name, :is_public, :description, :id_activity)");
        $req->bindValue(':id', $ulid, PDO::PARAM_STR);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':is_public', $is_public, PDO::PARAM_INT);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':id_activity', $activity_id, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
