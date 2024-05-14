<h1><?= $group["name"]?></h1>
<p><?= $group["description"]?></p>

<h2>Infos lié à l'activité</h2>
<p>Nom de l'activité : <?= $activity['name']?></p>
<p>Prix : <?= $activity["price"]?></p>
<p>Description : <?= $activity["description"]?></p>
<p>Adresse : <?= $activity["adress"]?></p>

<h2>Horaire</h2>
<p>date et heure de début : <?=$times['start_time']?></p>

<h2></h2>
<?php if($isOrga == 2){?>
    <h2>Organisateur</h2>
    <p>Vous êtes l'organisateur de ce groupe</p>
<?php }elseif($isOrga == 1){?>
    <p>Vous participer a cet évènement</p>
<?php }
    else{?>
    <br>
    <br>
    <a class="bouton" href="./?action=addUserInGroup&idGroup=<?=$id_group?>">Rejoindre le groupe</a>
<?php }?>
