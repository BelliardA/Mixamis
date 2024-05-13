<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";
include_once "$racine/model/bd.authentification.inc.php";

session_start();

$id_group = $_GET["idGroup"];

$group = getGroupsById($id_group);
$activity = getActivitiesById($group["id_activity"]);
$times = getTimeByGroup($id_group);

if(isOrgaByMail($_SESSION["mail"], $id_group)["is_orga"] == 1){
    $isOrga = 2;
}elseif(isOrgaByMail($_SESSION["mail"], $id_group)){
    $isOrga = 1;
}else{
    $isOrga = 0;
}


include "$racine/vue/vueHeader.php";
include "$racine/vue/vueGroup.php";