<section class="container">
    <section class="page-group">
        <div class="participants">
            <h2>Participants <br> <?=$nbParticipants?> / <?= $activity["capacity_max"]?></h2>
            <?php 
            foreach ($userInGroup as $user){
                if($user["is_orga"] == 1){
                    $userDetail = getUsersByMail($user["mail"])
                    ?>
                    <h3>Organisateur : <?= $userDetail['first_name']?> <?= $userDetail['name']?></h3>
                    <?php
                }
                else{
                    $userDetail = getUsersByMail($user["mail"])
                    ?>
                    <p><strong>Participant :</strong> <?= $userDetail['first_name']?> <?= $userDetail['name']?> </p>
                    <?php
                }
             }?>
        </div>
        <div class="infos-group">
            <h1><?= $group["name"]?></h1>
            <div class="infos-pratiques">
                <p><span>Adresse :</span> <?= $activity["adress"]?></p>
                <p><span>Date et heure du rendez-vous :</span> <?=dateFormat($times['start_time'])?></p>
                <p><span>Nombre de participants maximum :</span> <?= $activity["capacity_max"]?></p>
                <p><span>Prix par personne :</span> <?=$activity["price"]?> .-</p>
            </div>
            <div class="description-group">
                <h2>Description du groupe</h2>
                <p><?= $group["description"]?></p>  
            </div>
            <div class="description-activite">
                <h2>Description de l'activité</h2>
                <p><?= $activity["description"]?></p>
            </div>
            <div class="space-button">
                <?php if($isOrga == 2){?>
                    <p><span>Vous êtes l'organisateur de ce groupe</span></p>
                <?php }elseif($isOrga == 1){?>
                    <p><span> Vous participer a cet évènement</span></p>
                <?php }
                else{?>
                    <a class="bouton" href="./?action=addUserInGroup&idGroup=<?=$id_group?>">Rejoindre le groupe</a>
                <?php }?>
                    <button id="boutonCopier" class="bouton">Copié le code du group</button>
            </div>
        </div>
    </section>
</section>

<script>
    document.getElementById('boutonCopier').addEventListener('click', function() {
    
    // Créez un élément textarea (zone de texte) temporaire
    var textarea = document.createElement('textarea');
    textarea.value = "<?php echo $id_group; ?>";
    
    // Ajoutez le textarea au document
    document.body.appendChild(textarea);
    
    // Sélectionnez le contenu du textarea
    textarea.select();
    textarea.setSelectionRange(0, 99999); // Pour les mobiles
    
    // Copiez le texte dans le presse-papiers
    document.execCommand('copy');
    
    // Supprimez le textarea du document
    document.body.removeChild(textarea);
    
    // Optionnel : affichez un message de confirmation
    alert('Texte copié : ' + "<?php echo $id_group; ?>");
});
</script>