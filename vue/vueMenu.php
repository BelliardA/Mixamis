<main class="main-menu ">
    <section class="section-titre container">
        <div class="text">
            <h1>PASSE À L'ACTION ! </h1>
            <p>Activités variées pour tous les étudiants genevois ! Inscris-toi vite et ne passe pas à côté !</p>
        </div>
        <a href="./?action=connexion" class="bouton-menu bouton">Inscris-toi</a>
    </section>
    <div class="jambe-gauche">
        <img src="style/image/accueil/JAMBES_gauche.svg">
    </div>

<?php 
foreach ($categories as $category){
    ?>

    <section class="section-<?= $category['class']; ?> section-title">
        <div class="container">

            <h2><?= $category['name']; ?></h2>

            <div class="section-card">
            <?php
                    foreach ($groupsByCategory[$category['id']] as $group): ?>
                    <a class="card" href="./?action=group&idGroup=<?= $group['id']; ?>">
                        <h3><?= $group['name']; ?></h3>
                        <p><?= $group['description']; ?></p>
                    </a>
                <?php endforeach; 
            ?>
            </div>

        </div>

    </section>



    <?php
} ?>

</main>
