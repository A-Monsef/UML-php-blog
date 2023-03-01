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
    <section class="container">
        <div class='my_details col-10 mx-auto'>
        <h3 class='text-center'><?php echo $article["title"] ?></h3>
          <div class="details_img mt-4">
            <a href="details"><img src="<?php  echo $article["image"] ?>" alt="" class=''></a>
          </div>
          <div class="p-3">
          <div class="d-flex justify-content-between align-items-center">
              <h5><?php echo $article["autor"] ?></h5>
              <p><?php echo $article["date_publication"] ?></p>
            </div>
            <p class='py-3 desc fs-5'><?php echo $article["description"] ?></p>
          </div>
        </div>
    </section>
</body>
</html>