<?php $title = 'Préstations'; ?>
<?php ob_start(); ?>

<div class="container">

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>Titre</th>
      <th>Contenu</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($prestations as $prestation) { ?>

    <tr>
      <td><?= $prestation->title ?></td>
      <td><?= $prestation->description ?></td>
      <td><a href="/admin/prestation/view-<?= $prestation->id ?>">Modifier</a></td>
    </tr>

    <?php } ?>

  </tbody>
</table>

<a href="/admin/prestation/view-0">Nouvelle</a>


<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>