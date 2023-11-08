<?php
if ($_POST) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    if (empty($name)) {
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else if (empty($username)) {
        echo "<script>alert('username user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else if (empty($password)) {
        echo "<script>alert('password user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "insert into user (nama,username,password,role) value ('" . $name . "','" . $username . "','" . $password . "','" . $role . "')");
        if ($role == 'member') {
            $idb_query = mysqli_query($conn, "SELECT id_user FROM user WHERE username = '" . $username . "'");
            if ($idb_query) {
                $idb_data = mysqli_fetch_assoc($idb_query);
                $idb = $idb_data['id_user'];
                $insert2 = mysqli_query($conn, "INSERT INTO detail_lonba (status, id_user) VALUES ('Belum Mendaftar', '" . $idb . "')");
                if ($insert2) {
                    echo "<script>alert('Sukses menambahkan user detail');location.href='login.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan user detail');location.href='tambah_user.php';</script>";
                }
            } 
        } else {
            if ($insert) {
                echo "<script>alert('Sukses menambahkan user');location.href='login.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";

            }
        }
    }
}
?>