<?php $title = 'Prestations'; ?>
<?php ob_start(); ?>

<div class="row justify-content-center">

  <?php foreach ($prestations as $prestation) { ?>

  <div class="col-sm-6 col-lg-4">
    <div class="card" style="max-width: 18rem;">
      <div class="card-header bg-behance content-center" style="color:white">
        <?= $prestation->title ?>
      </div>
      <div class="card-body row text-center">
        <div class="col">
          <div class="small"><?= $prestation->description ?></div>
        </div>
      </div>
      <div class="card-footer">
        <a href="/admin/prestation/view-<?= $prestation->id ?>" class="btn btn-warning">Modifier</a>
      </div>
    </div>
  </div>

  <?php } ?>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <a href="/admin/prestation/view-0" class="btn btn-success">Nouvelle</a>
    </div>
  </div>

</div>

<div class="row">

</div>




<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>