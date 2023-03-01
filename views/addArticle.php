<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="row g-3 col-5 mt-5 pt-4 mx-auto" action='' method='POST' enctype="multipart/form-data">
          <div class="col-md-12 mb-1">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name='title'>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label">picture</label>
            <input type="text" class="form-control" name='image'>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" name="description"></textarea>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control"  name='autor'>
          </div>
          <?php if(!empty($_SESSION['error_msg'])) {?>
            <p class='text-danger text-center'><?php echo $_SESSION['error_msg'] ?></p>
            <?php } ?>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    </form>
</body>
</html>