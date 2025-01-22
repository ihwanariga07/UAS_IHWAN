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
                    <span class="float-end">
                        <a class="btn btn-primary" href="form.php">
                            <i class="fa-solid fa-square-plus"></i> Tambah Data
                        </a>
                    </span>
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
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Koneksi ke database
                            include("../koneksi.php");

                            // Query data pemesanan dengan nama tamu
                            $tampil = "
                                SELECT pemesanan.*, tamu.nama_tamu 
                                FROM pemesanan 
                                LEFT JOIN tamu ON pemesanan.id_tamu = tamu.id_tamu
                            ";

                            
                            $proses = mysqli_query($koneksi, $tampil);

                            if (mysqli_num_rows($proses) > 0) {
                                $nomor = 1;
                                while ($data = mysqli_fetch_assoc($proses)) {
                            ?>
                            <tr>
                                <th scope="row"><?=$nomor++?></th>
                                <td><?=$data['tanggal_checkin']?></td>
                                <td><?=$data['tanggal_checkout']?></td>
                                <td><?=$data['nama_tamu']?></td>
                                <td><?=$data['bukti_pembayaran']?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="edit.php?id_pemesanan=<?=$data['id_pemesanan']?>">
                                        <i class="fa fa-pen-to-square"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id_pemesanan']?>">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus<?=$data['id_pemesanan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin data <b><?=$data['nama_tamu']?></b> ingin dihapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <a href="hapus.php?xyz=<?=$data['id_pemesanan']?>" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>Data tidak ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/all.js"></script>
</body>
</html>
