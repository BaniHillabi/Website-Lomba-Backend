<?php
if ($_POST) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    if (empty($nama)) {
        echo "<script>alert('nama user tidak boleh kosong');location.href='ubah_user.php';</script>";

    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_user.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update user set nama='" . $nama . "', username='" . $username . "', alamat='" . $alamat . "', contact='" . $contact . "' where id_user = '" . $id_user . "' ") or die(mysqli_error($conn));
            if ($update) {
                if ($role == 'member') {
                    echo "<script>alert('Sukses update user');location.href='tampil_member.php';</script>";
                } else {
                    echo "<script>alert('Sukses update user');location.href='tampil_admin.php';</script>";
                }
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=" . $id_user . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update user set nama='" . $nama . "', alamat='" . $alamat . "', username='" . $username . "', password='" . $password. "', contact='" . $contact . "' where id_user = '" . $id_user . "'") or die(mysqli_error($conn));
            if ($update) {
                if ($role == "admin") {
                    echo "<script>alert('Sukses update user');location.href='tampil_admin.php';</script>";
                } else {
                    echo "<script>alert('Sukses update user');location.href='tampil_member.php';</script>";
                }
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=" . $id_user . "';</script>";
            }
        }

    }
}
?>