<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/bd.inc.php";
include_once "$racine/model/bd.authentification.inc.php";

session_start();
requiredConnexion();

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueJoinGroup.php";
include "$racine/vue/vueFooter.php";