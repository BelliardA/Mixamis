<h1>Valid mail</h1>

<p>Un mail de vérification vous a été envoyé à l'adresse <?php echo $mail; ?>.</p>

<form action="./?action=validmail" method="post">
    <label for="code_utilisateur">Code de vérification :</label>
    <input type="text" name="code_utilisateur" id="code_utilisateur" required>
    <input type="submit" value="Valider">
</form>

<?php
if (isset($message)) {
    echo "<p>$message</p>";
}
?>