<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.inc.php";
include_once "$racine/model/bd.authentification.inc.php";
include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";

session_start();

$groups = getGroupPublic();

//search group

if(isset($_GET['search'])){
    header("Location: ./?action=group&idGroup=".$_GET['search']);
}


include "$racine/vue/vueMenu.php";