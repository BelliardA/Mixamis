<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/aPropos.css">
    <link rel="stylesheet" href="style/menu.css">
</head>

<!-- suite du code sans utilisé de body ou html -->
<div class="nav-bar">
    <a href="./?action=defaut"> <img src="style/image/accueil/logo.svg" class="logo" alt="logo"></a>
    <div class="buttons-div">
        <?php
        if(isLoggedOn()){
            ?>
            <a href="./?action=search">
                <span>Chercher un group</span>
            </a>
            <?php
        }
        else{
            ?>
            <a href="./?action=connexion">
                <span>Chercher un group</span>
            </a>
            <?php
        }
        ?>
        <a href="./?action=addGroup">
            <span>Créer un groupe</span>
        </a>
        <a href="./?action=aPropos">
            <span>À propos</span>
        </a>
    </div>
    <a href="./?action=profil"> <img src="style/image/accueil/logo-user.svg" class="user-logo" alt="user-logo"></a>
</div>