<nav class='bg-white p-3 shadow-sm position-fixed fixed-top'>
    <div class='container d-flex align-items-center justify-content-between'>
        <a href='/reservasihotel'>
            <h4 class='fw-bold mb-0 pb-0 text-dark'>Hotel Wikusama</h4>
        </a>

        <div class='d-flex align-items-center'>
            <a href='data-kamar.php' class='me-3'>Data Kamar</a>

            <a href='data-user.php' class='me-2'>Data User</a>
            
            <form action="../api/logout.php" class='ms-2' method="post">
                <button class='btn btn-outline-danger shadow-none'>Logout</button>
            </form>
        </div>
    </div>
</nav>