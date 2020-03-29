<?php $title = 'Liste des joueurs'; ?>
<?php ob_start(); ?>


<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Pseudo</th>
      <th>Mail</th>
    </tr>
  </thead>
  <tbody>



    <?php while ($admin = $adminsReq->fetch()) { ?>

    <tr>
      <td><a href="index.php?action=player&id=<?= $admin['id'] ?>"><?= $admin['id'] ?></a></td>
      <td><?= $admin['pseudo'] ?></td>
      <td><?= $admin['mail'] ?></td>
    </tr>

    <?php } ?>

  </tbody>
</table>


<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>