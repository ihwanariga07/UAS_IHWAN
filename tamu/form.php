<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Tamu</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Tamu</label>
                    <input type="text" name="nama_tamu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Identitas</label>
                    <input type="text" name="nomor_identitas" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">
                <a href="/UAS_IHWAN/tamu/index.php">Batal</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script>
    function confirmLogout(event) {
        // Cegah aksi default dari link
        event.preventDefault();
        
        // Tampilkan dialog konfirmasi
        const userConfirmed = confirm("Anda yakin ingin keluar?");
        
        // Jika pengguna mengonfirmasi, arahkan ke halaman logout
        if (userConfirmed) {
        window.location.href = event.target.href;
        }
    }
    </script>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>