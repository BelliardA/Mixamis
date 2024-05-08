<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/bd.inc.php";

if(isset($_GET['search'])){
    header("Location: ./?action=group&idGroup=".$_GET['search']);
}

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueJoinGroup.php";