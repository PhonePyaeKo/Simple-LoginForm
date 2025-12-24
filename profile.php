<?php
    include("vendor/autoload.php");

    use Helpers\Auth;

    $user = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/554ebdddc2.js" crossorigin="anonymous"></script>    
</head>
<body>
    <div class="container" style="max-width: 800;">
        <h1 class="h4 my-4">Profile</h1>

        <?php if($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail" width="300">
        <?php endif ?>

        <form action="_actions/upload.php" class="input-group my-4" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload Photo</button>
        </form>

        <ul class="list-group mb-3">
            <li class="list-group-item">Name : <?= $user->name ?></li>
            <li class="list-group-item">Email : <?= $user->email ?></li>
            <li class="list-group-item">Phone : <?= $user->phone ?></li>
            <li class="list-group-item">Address : <?= $user->address ?></li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>