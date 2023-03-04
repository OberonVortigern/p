<?php
    session_start();
    error_reporting(0);
    include '../config/koneksi.php';

    if($_SESSION['role'] !== 'admin') {
        echo 'not found';
    } else {
        require_once '../component/header.php';
        require_once 'component/navbar.php';
        $sql = mysqli_query($koneksi, "SELECT * FROM users");
?>

<div class="container-fluid bg-silver min-vh-100 pt-5 mt-5">

    <div class="card container  mb-4 p-3">
        <div class='d-md-flex d-block justify-content-between'>
            <h4>Data User</h4>
            <a href="tambah-user.php">
                <button class='btn btn-outline-success shadow-none'>Tambah User</button>
            </a>
        </div>
    </div>
    <div class="card container p-3">
        <table class='table text-center table-borderglass'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;

                    while($r=mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $r['username'] ?></td>
                    <td><?php echo $r['password'] ?></td>
                    <td><?php echo $r['role'] ?></td>
                    <td>
                        <a href='edit-user.php?id=<?php echo $r["id"] ?>'>Edit</a>
                        /
                        <a class='ms-2 text-danger' onclick='return confirm(`yakin ingin menghapus?`)' href='../api/hapus-user.php?id=<?php echo $r["id"] ?>'>Hapus</a>
                    </td>
                </tr>
                <?php
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
    require_once '../component/footer.php';
    }
?>