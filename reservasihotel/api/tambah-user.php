<?php
    session_start();
    include '../config/koneksi.php';

    if($_SESSION['role'] !== 'admin') {
        echo 'Not Found';
    } else {
        $sql = mysqli_query($koneksi, "INSERT INTO users VALUES('','$_POST[username]', '$_POST[password]', '$_POST[role]')");

        if(!$sql) {
            echo '<script>
                    alert("Tambah data gagal");
                    window.open("../admin/data-user.php","_self")
                </script>';
        } else {
            echo '<script>
                    alert("Tambah data berhasil");
                    window.open("../admin/data-user.php","_self")
                </script>';
        }
    }
?>