<?php $title = 'Liste des admins'; ?>
<?php ob_start(); ?>

<style>
  .newAccount {
    font-size: 1em;
  }
</style>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>Pseudo</th>
      <th>Mail</th>
      <th></th>
    </tr>
  </thead>
  <tbody>



    <?php foreach ($admins as $admin) { ?>

    <tr>
      <td><?= $admin->pseudo ?></td>
      <td><?= $admin->mail ?></td>
      <td><a href="/admin/account/view-<?= $admin->id ?>">Modifier</a></td>
    </tr>

    <?php } ?>



  </tbody>
</table>

<button type="button" class="btn btn-pill btn-info newAccount">Nouveau compte <i class="fas fa-plus-circle"></i></button>

<script>
  function newAdmin() {
    document.location = "/admin/account/view-0";
  }
</script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>