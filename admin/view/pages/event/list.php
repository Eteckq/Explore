<?php $title = 'Evenement';
$menu = 'events'; ?>
<?php ob_start(); ?>

<div class="row justify-content-center">

  <?php foreach ($events as $event) { ?>

    <div class="col-sm-6 col-lg-4">
      <div class="card" style="max-width: 23rem;">
        <div class="card-header bg-behance content-center pb-2 pt-2" style="color:white">
          <?= $event->title ?>
        </div>
        <div class="card-body row text-center">
          <div class="col">
            <?= $event->description ?>
          </div>
          <div class="col">
            <?= $event->date ?>
          </div>
        </div>
        <div class="card-footer">
          <a href="/admin/event/view-<?= $event->id ?>" type="button" class="btn btn-warning text-white">Modifier <i class="fas fa-pen"></i></a>
          <a onclick="deleteEvent(<?= $event->id ?>)" type="button" class="btn btn-danger text-white"><i class="fas fa-trash"></i></a>
        </div>
      </div>
    </div>

  <?php } ?>

  <div class="col-sm-6 col-lg-4">
    <a href="/admin/event/view-0">
      <div class="card" style="max-width: 23rem; background-color:#39f;min-height:160px;">
        <div class="card-body row text-center content-center">
          <i class="fas fa-plus" style="font-size: 5em; color:white"></i>
        </div>
      </div>
    </a>
  </div>


</div>

<script>
  function deleteEvent(id) {
    if (confirm("Voulez vous vraiment supprimer cette evenement ?")) {
      document.location = "/admin/event/delete-" + id;
    }
  }
</script>




<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>