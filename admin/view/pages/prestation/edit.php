<?php $title = 'Préstation'; $menu = 'prestations'; ?>
<?php ob_start(); ?>


<form action="/admin/prestation/edit" method="post">
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="titre">Titre</span>
  </div>
  <input type="text" class="form-control" name="title" id="title" aria-describedby="titre" value="<?= $prestation->title ?>">
</div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description"><?= $prestation->description ?></textarea>
  </div>

  <input hidden type="number" name="id" id="id" value="<?= $prestation->id ?>">

  <button type="submit" class="btn btn-primary mb-2">Sauvegarder</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>