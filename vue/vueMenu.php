<main class="main-menu">
    <section class="section-titre">
        <div class="text">
            <h1>PASSE À L'ACTION ! </h1>
            <p>Activités variées pour tous les étudiants genevois ! Inscris-toi vite et ne passe pas à côté !</p>
        </div>
        <a href="./?action=connexion" class="bouton">Inscris-toi</a>
    </section>
    <div class="jambe-gauche">
        <img src="style/image/accueil/JAMBES_gauche.svg">
    </div>
    <section class="section-bulle">
        <h2>LOISIR & <br> DIVERTISSEMENT</h2>
    </section>
    <section class="card-bulle">
        <?php
        if(isset($groups)){
            foreach ($groups as $group): ?>
            <a href="./?action=group&idGroup=<?= $group['id']; ?>">
                <div class="card">
                        <h4><?= $group['name']; ?></h4>
                        <p><?= $group['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; 
        }
        ?>
    </section>
    <section class="section-triangle">
        <h2>
            <span>Art &</span>
            <span>Culture</span>
        </h2>
    </section>
    <section class="card-triangle">
        <?php
        if(isset($groups)){
            foreach ($groups as $group): ?>
            <a href="./?action=group&idGroup=<?= $group['id']; ?>">
                <div class="card">
                        <h4><?= $group['name']; ?></h4>
                        <p><?= $group['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; 
        }
        ?>
    </section>
    <section class="section-etoile">
        <h2>Night Life</h2>
    </section>
    <section class="card-etoile">
    <?php
        if(isset($groups)){
            foreach ($groups as $group): 
            if(isLoggedOn()){
                ?>
                <a href="./?action=group&idGroup=<?= $group['id']; ?>">
            <?php
            }
            else{
                ?>
                <a href="./?action=connexion">
                <?php
            }
            ?>
                <div class="card">
                        <h4><?= $group['name']; ?></h4>
                        <p><?= $group['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; 
        }
        ?>
    </section>
</main>
