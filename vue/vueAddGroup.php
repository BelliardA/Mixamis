<h2>Créer un groupe</h2>
    <form action="./?action=addGroup" method="POST">
        <div>
            <label for="name">Nom du groupe *:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="isPublic">Groupe Public * :</label>
            <input type="checkbox" id="isPublic" name="isPublic">
        </div>
        <div>
            <label for="description">description :</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
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
        <div>
            <button type="submit">Créer un groupe</button>
        </div>
    </form>