<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";
include_once "$racine/model/bd.groups_user.php";
include_once "$racine/model/bd.authentification.inc.php";

// Démarrer la session
session_start();
requiredConnexion();

$bodyClass = "body-create";

$activities = getActivities();

if (isset($_POST["name"]) && isset($_POST["id_activity"])){
    $name=$_POST["name"];
    $description=$_POST["description"];
    if (isset($_POST["isPublic"])) {
        if ($_POST["isPublic"] == "1") {
            $isPublic = 1; // Public
        } else {
            $isPublic = 0; // Privé
        }
    } else {
        $isPublic = 0; // Par défaut à Privé
    }
    
    $id_activity=$_POST["id_activity"];

    $ulid = generateULID();
    $result = addGroups($ulid, $name, $isPublic, $description, $id_activity);
}

if(isset($result) && $result){
    $mail = $_SESSION["mail"];
    var_dump($mail);
    addGroupsUser($mail, $ulid, 1);
    include "$racine/vue/vueHeader.php";
    header("Location:./?action=detailGroup&idGroup=$ulid&idActivity=$id_activity");
}else{
    include "$racine/vue/vueHeader.php";
    include "$racine/vue/vueAddGroup.php";
    include "$racine/vue/vueFooter.php";
}

function verifActivityDipo($idActivity){
    $timeActivities = getTimeActivitiesById($idActivity);
    foreach ($timeActivities as $timeActivity){
        if($timeActivity["is_book"] == 0){
            return true;
        }
    }
    return false;
}