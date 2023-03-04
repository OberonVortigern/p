<?php
    session_start();
    //error_reporting(0);
    include '../config/koneksi.php';

    if($_SESSION['role'] !== 'admin') {
        echo 'Not Found';
    } else {
        require_once '../component/header.php';
        require_once 'component/navbar.php';
?>

<div class='container-fluid bg-silver min-vh-100 pt-5 mt-5'>
    <div class="container d-flex justify-content-center">
        <div class="card col-12 col-lg-9 p-3">
            <h4>Tambah User</h4>
            <hr>
            <form action="../api/tambah-user.php?" method="post">
                <label class='mb-2'>Username</label>
                <input name='username' class='form-control mb-3'>

                <label class='mb-2'>Password</label>
                <input name='password' class='form-control mb-3'>

                <label class='mb-2'>Role</label>
                <input name='role' class='form-control mb-3'>
                    <button class='btn btn-success shadow-none'>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once '../component/footer.php';
    }
?>