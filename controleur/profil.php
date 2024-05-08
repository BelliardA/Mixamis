<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.inc.php";

include "$racine/vue/vueHeader.php";
include "$racine/vue/vueProfil.php";