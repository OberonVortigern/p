<?php
    session_start();
    include '../config/koneksi.php';

    if($_SESSION['role'] !== 'admin') {
        echo 'Not Found';
    } else {
        $sql = mysqli_query($koneksi, "UPDATE users SET Username='$_POST[username]', Password='$_POST[password]', Role='$_POST[role]' WHERE id=$_GET[id]");

        if(!$sql) {
            echo '<script>
                    alert("update data gagal");
                    window.open("../admin/edit-user.php","_self")
                </script>';
        } else {
            echo '<script>
                    alert("update data berhasil");
                    window.open("../admin/data-user.php","_self")
                </script>';
        }
    }
?>