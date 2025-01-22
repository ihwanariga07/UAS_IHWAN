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
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Pemesanan</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Checkin</label>
                    <input type="date" name="tanggal_checkin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Checkout</label>
                    <input type="date" name="tanggal_checkout" class="form-control" id="exampleInputPassword1">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Tamu</label>
                    <select name="tam" class="form-control" id="">
                        <option value="">-Pilih Nama Tamu</option>
                        <?php
                            include('../koneksi.php');
                            $sql_tam = "SELECT * FROM tamu";
                            $qry_tam = mysqli_query($koneksi,$sql_tam);
                            foreach($qry_tam as $data_tam){
                                ?>
                                <option value="<?=$data_tam['id_tamu']?>"><?=$data_tam['nama_tamu']?></option>
                                <?php
                            }
                        ?>
                    </select>


                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
                    <input type="file" accept="image/*" name="bukti_pembayaran" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">
                <a href="/UAS_IHWAN/pemesanan/index.php">Batal</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>


<script>
    function confirmLogout(event) {
        event.preventDefault();
        const userConfirmed = confirm("Anda yakin ingin keluar?");
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