<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.inc.php";
include_once "$racine/model/bd.authentification.inc.php";
include_once "$racine/model/bd.groups.inc.php";
include_once "$racine/model/bd.activities.php";
include_once "$racine/model/bd.categories.inc.php";

$groups = getGroupPublic();

if(isset($_GET['search'])){
    header("Location: ./?action=group&idGroup=".$_GET['search']);
}

$categories = getCategories();
$groupsByCategory = [];
foreach($categories as $category){
    $groupsByCategory[$category['id']] = [];
}
foreach($groups as $group){
    $groupsByCategory[$group['id_category']][] = $group;
}


include "$racine/vue/vueHeader.php";
include "$racine/vue/vueMenu.php";
include "$racine/vue/vueFooter.php";