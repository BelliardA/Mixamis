<head>
    <link rel="stylesheet" href="style/menu.css">
</head>
<section class="addGroup">
    <img src="style/image/JAMBES_gauche-login.svg" id="jambe-gauche-noodle">
    <div>
        <div class="titre-addgroup-div">
            <div class="titre-addgroup">
                <h2>Création</h2>
            </div>
        </div>
        <div class="addGroup-div">
            <form action="./?action=addGroup" method="POST">
                <div class="form-body">
                    <div class="information">
                        <div class="nom-groupe">
                            <label for="name">Nom du groupe *:</label>
                            <input type="text" id="name" name="name" placeholder="Nom du Groupe" required>
                        </div>
                        <div class="description">
                            <label for="description">Description :</label>
                            <textarea type="text" id="description" name="description" placeholder="Ajouter une Description" ></textarea>
                        </div>
                    </div>
                    <div class="visib-act">
                    <div class="activite">
                            <label for="id_activity">Activité :</label>
                            <select class="form-control" id="id_activity" name="id_activity">
                                <?php foreach ($activities as $activity): 
                                    if(verifActivityDipo($activity["id"])){
                                        ?>
                                        <?php echo("activité" . $activity['name']); ?>
                                        <option value="<?php echo $activity['id']; ?>">
                                            <?php echo $activity['name']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="visibilite">
                            <label for="isPublic">Groupe Public * :</label>
                            <input class="checkbox" type="checkbox" id="isPublic" name="isPublic">
                        </div>
                    </div>   
                </div>
                <div>
                    <button type="submit"  class="button">Créer Le groupe</button>
                </div>
            </form>
        </div>
    </div>
    <img src="style/image/JAMBES_droite-noodle.svg" id="jambe-gauche-noodle">
</section>
<footer>
        <a href="index.html"> <img src="style/image/accueil/logo.svg" class="logo" alt="logo"></a>
        <a href="#">Créer un groupe</a>
        <a href="#">Rejoindre un groupe</a>
        <a href="#">À propos</a>
        <div id="logos">
            <img src="style/image/footer/Logos.svg">
            <img src="style/image/footer/Group 2.svg">
        </div>
</footer>
