<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center" style="max-width: 600px">
        <h1 class="h3 my-4">Register</h1>
        <form action="_actions/create.php" method="post" class="mb-4">
            <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>
            <textarea name="address" placeholder="Address" class="form-control mb-2" required></textarea>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button class="btn btn-primary w-100">Register</button>
        </form>

        <a href="index.php" class="btn btn-secondary">Login</a>
    </div>
</body>
</html>