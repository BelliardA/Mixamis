<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.inc.php";
include_once "$racine/model/bd.authentification.inc.php";
include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";

$groups = getGroupPublic();

if(isset($_GET['search'])){
    header("Location: ./?action=group&idGroup=".$_GET['search']);
}

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueMenu.php";
include "$racine/vue/vueFooter.php";