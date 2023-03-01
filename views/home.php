<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .article_img{
            width: 100%;
        }
        .article_img img{
            width: 100%;
            height: 230px;
        }
    </style>
</head>
<body>
    
     <section class="container mt-5 mx-auto row g-5">
        <?php foreach($articles as $article) {?>
        <div class="col-4 text-center mx-auto ">
            <div class="mx-auto shadow">
                <div class="article_img">
                    <img src="<?php echo $article["image"] ?>" alt="" class="img-fluid">
                </div>
                <div class="p-3">
                    <a href="details&id=<?php echo $article["id"]  ?>"><h2><?php echo $article["title"]  ?></h2></a>
                    <p class="py-3"><?php echo $article["description"]  ?></p>
                    <div class="d-flex justify-content-between align-items-end">
                        <h2><?php echo $article["autor"]  ?></h2>
                        <p><?php echo $article["date_publication"]  ?></p>
                    </div>
                </div>
            </div>           
        </div>
        <?php }?>
     </section>
</body>
</html>