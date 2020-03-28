<?php $title = 'Liste des taches'; ?>
<?php ob_start(); ?>


<?php //Afffichage de toutes les taches
while ($data = $progress->fetch()) { ?>
  
<div class="container">
  <h3 style="font-style: italic;"><a href="index.php?action=getTask&amp;id=<?= $data['id'] ?>"><?= $data["name"]; ?></a></h3>
  <p><?= $data["description"]; ?></p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?= $data["progression"]; ?>%"></div>
  </div>
</div>

<?php } ?>




<form action="index.php?action=sendTask" method="post">
      <div>
          <label for="name">Nom</label><br />
          <input type="text" name="name"/>
      </div>
      <div>
          <label for="description">Description</label><br />
          <textarea name="description" style="width: 80%; height: 25%;"></textarea>
      </div>
      <div>
          <input type="submit" />
      </div>
</form>





<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>