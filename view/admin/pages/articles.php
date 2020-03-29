<?php $title = 'Tache'; ?>
<?php ob_start(); ?>

<div class="container">

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>Contenu</th>
    </tr>
  </thead>
  <tbody>

    <?php while ($article = $articlesReq->fetch()) { ?>

    <tr>
      <td><a href="index.php?action=player&id=<?= $article['id'] ?>"><?= $article['id'] ?></a></td>
      <td><?= $article['title'] ?></td>
      <td><?= $article['content'] ?></td>
    </tr>

    <?php } ?>

  </tbody>
</table>


<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>