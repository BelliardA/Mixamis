<head>
    <link rel="stylesheet" href="style/menu.css">
</head>

<!-- <h1>menu</h1>

<ul>
    <li><a href="./?action=connexion">Connexion</a></li>
    <?php
    if(isLoggedOn()){
        ?>
        <li><a href="./?action=addGroup">Créer un groupe</a></li>
        <?php
    }
    ?>
    <li><a href="./?action=aPropos">A Propos</a></li>
</ul>

<form action="./?action=defaut">
    <input type="text" name="search" placeholder="Rechercher un groupe">
    <input type="submit" value="Rechercher">
</form>

<section class="section">
    <style>
        .section{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        .card a {
            text-decoration: none;
            color: #333;
        }

        .card a:hover {
            background-color: #e9e9e9;
        }

        .card h3 {
            margin-bottom: 5px;
        }

        .card p {
            margin-top: 5px;
        }
    </style>

    <h2>Groupes Disponibles</h2>
    <?php
    if(isset($groups)){
        foreach ($groups as $group): ?>
            <div class="card">
                <a href="./?action=group&idGroup=<?= $group['id']; ?>">
                    <h3><?= $group['name']; ?></h3>
                    <p><?= $group['description']; ?></p>
                </a>
            </div>
        <?php endforeach; 
    }
    ?>
</section> -->

<main class="main-menu">
    <section class="section-titre">
        <div class="text">
            <h1>PASSE À L'ACTION ! </h1>
            <p>Activités variées pour tous les étudiants genevois ! Inscris-toi vite et ne passe pas à côté !</p>
        </div>
        <a href="./?action=connexion" class="bouton">Inscris-toi</a>
    </section>
    <div class="jambe-gauche">
        <img src="style/image/accueil/JAMBES_gauche.svg">
    </div>
    <section class="section-bulle">
        <h2>LOISIR & <br> DIVERTISSEMENT</h2>
        <h3>Phrase à trouver</h3>
    </section>
    <section class="card-bulle">
        <?php
        if(isset($groups)){
            foreach ($groups as $group): ?>
            <a href="./?action=group&idGroup=<?= $group['id']; ?>">
                <div class="card">
                        <h4><?= $group['name']; ?></h4>
                        <p><?= $group['description']; ?></p>
                    </div>
                </a>
            <?php endforeach; 
        }
        ?>
    </section>
    <section class="section-triangle">

    </section>
    <section class="card-triangle">

    </section>
    <section class="section-etoile">

    </section>
    <section class="card-etoile">

    </section>
</main>
