<?php $title = 'Préstation'; ?>
<?php ob_start(); ?>

<div class="container">

<form action="/admin/prestation/edit" method="post">
  <input type="text" name="title" id="title" value="<?= $prestation->title ?>">
  <input type="text" name="description" id="description" value="<?= $prestation->description ?>">
  <input hidden type="number" name="id" id="id" value="<?= $prestation->id ?>">
  <button type="submit">Sauvegarder</button>
</form>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>