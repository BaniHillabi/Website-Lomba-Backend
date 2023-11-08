<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="proses_login.php" method="post">
            <h1>Login</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <a href="tambah_user.php">belum punya akun?</a>
            <input type="submit" name="login" class="" value="LOGIN">
        </form>
    </div>
    <script>src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"</script>
</body>

</html>