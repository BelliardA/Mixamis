<h1>Choix des horaires</h1>
<h2>Les horaires disponibles :</h2>
<form action="" method="POST">
    <?php foreach ($timeActivities as $timeActivity): ?>
        <div>
            <?php if($timeActivity["is_book"] == 0): ?>
                <label for="<?= $timeActivity["start_time"] ?>">
                    <?= $timeActivity["start_time"] ?>
                </label>
            <input type="radio" id="<?= $timeActivity["start_time"] ?>" name="time" value="<?= $timeActivity["start_time"] ?>" required>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    <button type="submit">Choisir</button>
</form>