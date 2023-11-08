<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <h3>Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        Nama :
        <input type="text" name="name" value="" class="form-control">
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <select class="form-select" name="role" aria-label="Default select example">
            <option selected value="member">Member</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" name="simpan" value="Submit" class="simpan" >
        <a href="login.php" class="login" >login</a>
    </form>

    <script>
        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity = "sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin = "anonymous"
    </script>
</body>

<style>
    .simpan{
        position: relative;
        text-align: center;
        top: 30px;
        left: 20px;
        background-color: aqua;
        border-color: white;
        width: 100px;
        height: auto;
        /* padding-top: 20px;     */
        }
    .login{
        position: relative;
    }
</style>

</html>