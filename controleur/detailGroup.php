<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.activities.php";

$timeActivities = getTimeActivitiesById($_GET["idActivity"]);

if(isset($_POST["time"])){
    $time = $_POST["time"];
    $idActivity = $_GET["idActivity"];
    $idGroup = $_GET["idGroup"];
    updateHorraire($idActivity, $idGroup, $time);
    header("Location: ./?action=defaut");
    exit();
}

include_once "$racine/vue/vueDetailsGroup.php";