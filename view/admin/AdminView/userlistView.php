<?php $title = 'Liste des joueurs'; ?>
<?php ob_start(); ?>


<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Pseudo</th>
        <th>Admin</th>
      </tr>
    </thead>
    <tbody>


<?php

while ($user = $userList->fetch()) {
if ($user['isAdmin'] == "1") {
	$admin = "Oui";
} else {
	$admin = "Non";
}
?>
	   <tr>
        <td><a href="index.php?action=player&id=<?= $user['id'] ?>"><?= $user['id'] ?></a></td>
        <td><?= $user['pseudo'] ?></td>
        <td><?= $admin ?></td>
      </tr>
<?php	
}
?>



    </tbody>
	</table>


<?php $content = ob_get_clean(); ?>
<?php require('view/admin/template.php'); ?>