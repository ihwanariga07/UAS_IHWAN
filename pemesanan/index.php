<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>

<?php 
    include_once('../navbar.php');
?>
    
<div class="container">
    <div class="row mt-5">
        <div class="col-11 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Pemesanan</h3>
                <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i></a></span>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal Checkin</th>
                        <th scope="col">Tanggal Checkout</th>
                        <th scope="col">Tamu</th>
                        <th scope="col">Bukti Pembayaran</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #1. koneksikan file ini
                    include("../koneksi.php");

                    #2. menulis query
                    $tampil = "SELECT * FROM pemesanan";

                    #3. jalankan query
                    $proses = mysqli_query($koneksi, $tampil);

                    #4. looping data dari database
                    $nomor = 1;
                    foreach($proses as $data){
                    ?>
                    <tr>
                        <th scope="row"><?=$nomor++?></th>
                        <td><?=$data['tanggal_checkin']?></td>
                        <td><?=$data['tanggal_checkout']?></td>
                        <td><?=$data['id_tamu']?></td>
                        <td><?=$data['bukti_pembayaran']?></td>
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id']?>"><i class="fa fa-pen-to-square"></i></a>
                            
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id']?>">
                            <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin data <b><?=$data['pemesanan']?></b> ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <a href="hapus.php?xyz=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
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