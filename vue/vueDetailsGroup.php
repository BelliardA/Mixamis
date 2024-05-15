<section class="container">
    <div class="full-page-horriare">
        <h1 class="titre-choix-horraire">Choix des horaires</h1>
        <div class="choix-horraire">
            <h2>Les horaires disponibles :</h2>
            <form class="form-choix-horraire" action="" method="POST">
                <?php foreach ($timeActivities as $timeActivity): ?>
                    <div>
                        <?php if($timeActivity["is_book"] == 0): ?>
                            <label for="<?= $timeActivity["start_time"] ?>">
                                <?=dateFormat($timeActivity["start_time"])?>
                            </label>
                            <input type="radio" id="<?= $timeActivity["start_time"] ?>" name="time" value="<?= $timeActivity["start_time"] ?>" required>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="bouton">Choisir</button>
            </form>
        </div>
    </div>
</section>