<?php $title = 'Liste des admins'; ?>
<?php ob_start(); ?>


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


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>