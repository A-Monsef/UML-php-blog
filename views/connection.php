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
    <form class="row g-3 col-4 mx-auto mt-5" action='' method='POST' enctype="multipart/form-data">

        <div class="col-md-12 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"  name='email'>
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control"  name='password'>
        </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>

    </form>
</body>
</html>