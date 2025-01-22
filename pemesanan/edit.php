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
        include("../koneksi.php");

        // Ambil data berdasarkan ID
        $id_pemesanan = $_GET['id_pemesanan'];
        $query = "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data Pemesanan</h3>
            </div>
            <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_pemesanan" value="<?=$data['id_pemesanan']?>">
                <div class="mb-3">
                    <label for="checkin" class="form-label">Tanggal Checkin</label>
                    <input type="date" value="<?=$data['tanggal_checkin']?>" name="tanggal_checkin" class="form-control" id="checkin">
                </div>
                <div class="mb-3">
                    <label for="checkout" class="form-label">Tanggal Checkout</label>
                    <input type="date" value="<?=$data['tanggal_checkout']?>" name="tanggal_checkout" class="form-control" id="checkout">
                </div>
                <div class="mb-3">
                    <label for="tamu" class="form-label">Nama Tamu</label>
                    <select name="id_tamu" class="form-control" id="tamu">
                        <?php
                        // Ambil data tamu
                        $query_tamu = "SELECT * FROM tamu";
                        $result_tamu = mysqli_query($koneksi, $query_tamu);
                        while ($tamu = mysqli_fetch_assoc($result_tamu)) {
                            $selected = ($tamu['id_tamu'] == $data['id_tamu']) ? "selected" : "";
                            echo "<option value='{$tamu['id_tamu']}' {$selected}>{$tamu['nama_tamu']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bukti" class="form-label">Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" class="form-control" id="bukti">
                    <p>File saat ini: <a href="../uploads/<?=$data['bukti_pembayaran']?>" target="_blank"><?=$data['bukti_pembayaran']?></a></p>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
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
