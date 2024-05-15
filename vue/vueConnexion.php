<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="style/menu.css">
    <title>Connexion</title>
</head>


<section class="section">
    <div class="log-in-div-body">
        <img src="style/image/log-in/JAMBES_3-gauche.svg" id="image-gauche">
        <div class="login">
            <h1>LOGIN</h1>
            <div class="login-form">
                <form action="./?action=connexion" method="POST">
                    <div class="login-information">
                        <div id="email">
                            <label for="mail"> <strong>Email </strong></label>
                            <input type="email" name="mail" id="mail" placeholder="Email Scolaire" /><br />
                        </div>
                        <div id="password">
                            <label for="password"><strong>password </strong></label>
                            <input type="password" name="password" id="password" placeholder="Mot de passe"  /><br />
                        </div>
                    </div>
                    <div class="login-links">
                        <button class="button">Login</button>
                        <!-- <button href="#"> <strong> Forgot password ?</strong></button> -->
                        <a href="./?action=register"> <strong>Sign-Up</strong></a>
                    </div>
                </form>
            </div>
        </div>
        <img src="style/image/log-in/JAMBES_3-droite.svg" id="image-droite">
    </div>
</section>
