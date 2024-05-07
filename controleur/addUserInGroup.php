<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.groups_user.php";

session_start();

$mail = $_SESSION["mail"];
$id_group = $_GET["idGroup"];

addGroupsUser($mail, $id_group, false);

include "$racine/vue/vueHeader.php";
header("Location:./?action=group&idGroup=$id_group");