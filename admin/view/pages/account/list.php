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
      <td>
        <a href="/admin/account/view-<?= $admin->id ?>" type="button" class="btn btn-warning text-white">Modifier <i class="fas fa-pen"></i></a>
        <a onclick="deleteAccount(<?= $admin->id ?>)" type="button" class="btn btn-danger text-white"><i class="fas fa-trash"></i></a>
      </td>
      
    </tr>

    <?php } ?>



  </tbody>
</table>

<script>

function deleteAccount(id){
  if(confirm("Voulez vous vraiment supprimer ce compte ?")){
    document.location = "/admin/account/delete-" + id;
  }
}

</script>

<a href="/admin/account/view-0" type="button" class="btn btn-pill btn-info">Nouveau compte <i class="fas fa-plus-circle"></i></a>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>