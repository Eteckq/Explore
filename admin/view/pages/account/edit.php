<?php $title = 'Edition'; ?>
<?php ob_start(); ?>

<form action="/admin/account/edit" method="post">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="pseudoDesc">Pseudo</span>
    </div>
    <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?= $admin->pseudo ?>"
      aria-describedby="pseudoDesc">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="mailDesc">@</span>
    </div>
    <input type="mail" class="form-control" name="mail" id="mail" value="<?= $admin->mail ?>"
      aria-describedby="mailDesc">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="passDesc">Mot de passe</span>
    </div>
    <input type="text" class="form-control" name="password" id="password" value="<?= $admin->password ?>"
      aria-describedby="passDesc">
  </div>

  <input hidden type="number" name="id" id="id" value="<?= $admin->id ?>">
  <button type="submit" class="btn btn-primary">Sauvegarder</button>
</form>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>