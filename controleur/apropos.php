<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.authentification.inc.php";

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueAPropos.php";
include "$racine/vue/vueFooter.php";