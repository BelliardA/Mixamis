<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="style/main.css">
    <title>Inscription</title>
</head>

<div class="signup-div-body">
    <img src="style/image/inscription/JAMBES_1-gauche.svg" id="image-gauche">
    <div class="sign-up">
        <h2>Sign-up</h2>
        <div class="sign-up-form">
            <form action="./?action=register" method="POST">
                <div class="sign-up-information">
                    <div id="email">
                        <label for="mail">Email :</label>
                        <input type="email" id="mail" name="mail" placeholder="Email Scolaire" required>
                    </div>
                    <div id="email">
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Votre Nom" required>
                    </div>
                    <div id="email">
                        <label for="firstname">Prénom :</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Votre Prénom" required>
                    </div>
                    <div id="email">
                        <label for="school">École :</label>
                        <input type="text" id="school" name="school" placeholder="Votre École" required>
                    </div>
                    <div class="password">
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" placeholder="mot de passe" required>
                    </div>
                </div>
                <div class="sign-up-checkbox">
                    <input type="checkbox" required> <p>I agree to the Terms of Use and Privacy Policy</p>
                </div>
                <div class="sign-up-links">
                        <a class="button" action="./?action=register"><strong> sign-up</strong></a>
                        <a><strong> Learn more</strong></a>
                </div>
            </form> 
        </div>
    </div>

    <img src="style/image/inscription/JAMBES-droite.svg" id="image-droite">
</div>

