<head>
    <link rel="stylesheet" href="style/addGroup.css">
</head>
<section class="default-form">
    <div class="titre">
        <h2>Créer un groupe</h2>
    </div>
    <form action="./?action=addGroup" method="POST">

        <div class="label-input">
            <label for="name">Nom du groupe :</label>
            <input type="text" id="name" name="name" placeholder="ex : Sorti Bar, Foot, Boite de nuit" required>
        </div>
        <div class="label-radio-pp">
            <label for="isPublic">Type de Groupe :</label>
            <div>
                <label for="isPublic" class="PP">Privé</label>
                <input type="radio" id="private" name="isPublic" value="0">
                <label for="isPublic" class="PP">Public</label>
                <input type="radio" id="public" name="isPublic" value="1">
            </div>
        </div>
        <div class="label-input">
            <label for="description">description :</label>
            <input type="text" id="description" name="description" placeholder="Description">
        </div>
        <div class="label-input-select">
            <label for="id_activity">Activité :</label>
            <select  class="select-activite" id="id_activity" name="id_activity">
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
        <div>
            <button class="bouton btn-form" type="submit">Créer un groupe</button>
        </div>
    </form>
</section>
