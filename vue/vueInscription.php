<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="style/inscription.css">
    <title>Inscription</title>
</head>

<div class="div-body">
    <img src="images/sign-up/JAMBES_1-gauche.svg" id="image-gauche">
    <div class="sign-up">
        <h2>Inscription</h2>
        <div class="sign-up-form">
            <form action="./?action=register" method="POST">
                <div class="sign-up-information">
                    <div class="email">
                        <label for="mail">Email :</label>
                        <input type="email" id="mail" name="mail" required>
                    </div>
                    <div class="email">
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
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>
                <div class="checkbox">
                    <input type="checkbox" required> <p>I agree to the Terms of Use and Privacy Policy</p>
                </div>
                <div class="sign-up-links">
                        <button>sign-up</button>
                        <a> <strong> Learn more</strong></a>
                </div>
            </form>
        </div>
    </div>
    <img src="images/sign-up/JAMBES-droite.svg" id="image-droite">
</div>
