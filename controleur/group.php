<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";
include_once "$racine/model/bd.groups_user.php";
include_once "$racine/model/bd.users.inc.php";
include_once "$racine/model/bd.categories.inc.php";
include_once "$racine/model/bd.authentification.inc.php";

// Démarrer la session
session_start();
requiredConnexion();

// Vérifiez si l'utilisateur est connecté
if (!isLoggedOn()) {
    die("Vous devez être connecté pour accéder à cette page.");
}

// Vérifiez si la variable de session 'mail' est définie
if (!isset($_SESSION["mail"])) {
    die("Erreur : l'utilisateur n'est pas correctement connecté.");
}

$id_group = $_GET["idGroup"];

$group = getGroupsById($id_group);
$activity = getActivitiesById($group["id_activity"]);
$times = getTimeByGroup($id_group);
$category = getCategoryByID($activity["id_category"]);


$result = isOrgaByMail($_SESSION["mail"], $id_group);

if ($result && $result["is_orga"] == 1) {
    $isOrga = 2;
} elseif ($result) {
    $isOrga = 1;
} else {
    $isOrga = 0;
}

$userInGroup = getuserInGroup($id_group);
$nbParticipants= count($userInGroup);

$bodyClass = "body-". $category["class"];
include "$racine/vue/vueHeader.php";
include "$racine/vue/vueGroup.php";
include "$racine/vue/vueFooter.php";