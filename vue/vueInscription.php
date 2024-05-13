<h2>Inscription</h2>
<form action="./?action=register" method="POST">
    <div>
        <label for="mail">Email :</label>
        <input type="email" id="mail" name="mail" required>
    </div>
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
        <label for="school">École :</label>
        <input type="text" id="school" name="school" required>
    </div>
    <div>
        <button type="submit">S'inscrire</button>
    </div>
</form>
<?php
if (isset($message)){
    echo "<p>$message</p>";
}
