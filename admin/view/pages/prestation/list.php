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
        <a href="/admin/prestation/view-<?= $prestation->id ?>" type="button" class="btn btn-warning text-white">Modifier <i class="fas fa-pen"></i></a>
        <a onclick="deletePrestation(<?= $prestation->id ?>)" type="button" class="btn btn-danger text-white"><i class="fas fa-trash"></i></a>
      </div>
    </div>
  </div>

  <?php } ?>

  <div class="col-sm-6 col-lg-4">
    <a href="/admin/prestation/view-0">
      <div class="card" style="max-width: 18rem; background-color:#2eb85c;min-height:140.8px;">
        <div class="card-body row text-center content-center">
          <i class="fas fa-plus" style="font-size: 5em; color:white"></i>
        </div>
      </div>
    </a>
  </div>


</div>

<script>

function deletePrestation(id){
  if(confirm("Voulez vous vraiment supprimer cette prestation ?")){
    document.location = "/admin/prestation/delete-" + id;
  }
}

</script>




<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>