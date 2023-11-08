<?php
include "koneksi.php";
if ($_POST) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    echo $password;
    if (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        $qry_login = mysqli_query($conn, "select * from user where username like '" . $username . "' and password like '" . $password . "'");
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            if ($dt_login["role"] == "admin") {
                session_start();
                $_SESSION["username"] = $dt_login["username"];
                $_SESSION["password"] = $dt_login["password"];
                $_SESSION["status_login"] = true;
                header("location: admin/home.php");
            } else {
                session_start();
                $_SESSION["username"] = $dt_login["username"];
                $_SESSION["password"] = $dt_login["password"];
                $_SESSION["status_login"] = true;
                header("location: home.php");

            }
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}
?>