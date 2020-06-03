<?php $title = 'Evenement';
$menu = 'events'; ?>
<?php ob_start(); ?>

<form enctype="multipart/form-data" action="" method="post">
  Image : <input name="image" type="file" id="file" />
  <input type="button" id="uploadImg" value="Envoyer" />
</form>

<img src="/upload/<?= $event->image ?>" id="preview" width="100" height="100">

<form action="/admin/event/edit" method="post">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="titre">Titre</span>
    </div>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="titre" value="<?= $event->title ?>">
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description"><?= $event->description ?></textarea>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Date</span>
    </div>
    <textarea class="form-control" name="date"><?= $event->date ?></textarea>
  </div>

  <input hidden type="number" name="id" id="id" value="<?= $event->id ?>">

  <button type="submit" class="btn btn-primary mb-2">Sauvegarder</button>
</form>

<script>
  $("#uploadImg").click(function() {
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file', files);

    $.ajax({
      url: '/admin/upload/event',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response) {
        console.log(response);

        if (response != 0) {
          $("#preview").attr("src", response);
        } else {
          alert('file not uploaded');
        }
      },
    });
  });
</script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>