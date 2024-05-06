<h1>menu</h1>

<h2>Connecté en tant que : <?=$_SESSION['mail'];?></h2>

<ul>
    <li><a href="./?action=connexion">Connexion</a></li>
    <?php
    if(isLoggedOn()){
        ?>
        <li><a href="./?action=addGroup">Créer un groupe</a></li>
        <?php
    }
    ?>
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
</section>