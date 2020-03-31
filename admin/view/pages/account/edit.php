<?php $title = 'Edition'; ?>
<?php ob_start(); ?>

<form action="/admin/account/edit" method="post">
  <input type="text" name="pseudo" id="pseudo" value="<?= $admin->pseudo ?>">
  <input type="text" name="mail" id="mail" value="<?= $admin->mail ?>">
  <input type="text" name="password" id="password" value="<?= $admin->password ?>">
  <input hidden type="number" name="id" id="id" value="<?= $admin->id ?>">
  <button type="submit">Sauvegarder</button>
</form>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>