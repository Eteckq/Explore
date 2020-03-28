<?php $title = 'Tache'; ?>
<?php ob_start(); ?>

<?php //Affichage de la tache selectionnée ?>
<div class="container">
  <h3 style="font-style: italic;"><?= $tache["name"]; ?></h3>
  <p><?= $tache["description"]; ?></p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?= $tache["progression"]; ?>%"></div>
  </div>
</div>


<?php //Affichage des commentaires
while ($comment = $comments->fetch()) { ?>
  
  <p><?= $comment["text"]; ?></p> 

<?php } ?>




<form action="index.php?action=commentTask" method="post">
      <div>
          <input type="hidden" name="id" value="<?= $tache["id"] ?>">
          <label for="commentaire">Commentaire</label><br />
          <textarea name="commentaire" style="width: 80%; height: 25%;"></textarea>
      </div>
      <div>
          <input type="submit" />
      </div>
</form>

<form action="index.php?action=setTaskProgress" method="post">
      <div>
          <input type="hidden" name="id" value="<?= $tache["id"] ?>">
          <label for="value">Progression (%)</label><br />
          <textarea name="value"></textarea>
      </div>
      <div>
          <input type="submit" />
      </div>
</form>





<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>