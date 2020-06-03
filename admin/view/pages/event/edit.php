<?php $title = 'Evenement';
$menu = 'events'; ?>
<?php ob_start(); ?>


<form action="/admin/event/edit" method="post">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="titre">Titre</span>
    </div>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="titre" value="<?= $event->title ?>">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description"><?= $event->description ?></textarea>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Date</span>
    </div>
    <textarea class="form-control" name="date"><?= $event->date ?></textarea>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Image</span>
    </div>
    <textarea class="form-control" name="image"><?= $event->image ?></textarea>
  </div>

  <input hidden type="number" name="id" id="id" value="<?= $event->id ?>">

  <button type="submit" class="btn btn-primary mb-2">Sauvegarder</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>