<?php
include("../koneksi.php");

$id_pemesanan = $_POST['id_pemesanan'];
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_tamu = $_POST['id_tamu'];

// Proses unggah bukti pembayaran
if ($_FILES['bukti_pembayaran']['name'] != "") {
    $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
    $target = "../uploads/" . basename($bukti_pembayaran);

    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $target)) {
        // Query dengan pembaruan bukti pembayaran
        $query = "
            UPDATE pemesanan 
            SET 
                tanggal_checkin='$tanggal_checkin', 
                tanggal_checkout='$tanggal_checkout', 
                id_tamu='$id_tamu',
                bukti_pembayaran='$bukti_pembayaran' 
            WHERE id_pemesanan='$id_pemesanan'
        ";
    } else {
        die("Gagal mengunggah bukti pembayaran.");
    }
} else {
    // Query tanpa pembaruan bukti pembayaran
    $query = "
        UPDATE pemesanan 
        SET 
            tanggal_checkin='$tanggal_checkin', 
            tanggal_checkout='$tanggal_checkout', 
            id_tamu='$id_tamu'
        WHERE id_pemesanan='$id_pemesanan'
    ";
}

// Jalankan query
$proses = mysqli_query($koneksi, $query);

// Redirect ke index
if ($proses) {
    echo "<script>alert('Data berhasil diperbarui!'); document.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diperbarui!'); document.location='index.php';</script>";
}
?>





<form action="proses.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal Checkin</label>
        <input type="date" name="tanggal_checkin" class="form-control" value="<?=$data['tanggal_checkin']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal Checkout</label>
        <input type="date" name="tanggal_checkout" class="form-control" value="<?=$data['tanggal_checkout']?>" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Tamu</label>
        <select name="id_tamu" class="form-control">
            <?php
                include('../koneksi.php');
                $sql_tamu = "SELECT * FROM tamu";
                $qry_tamu = mysqli_query($koneksi,$sql_tamu);
                while ($data_tamu = mysqli_fetch_assoc($qry_tamu)) {
                    ?>
                    <option value="<?=$data_tamu['id_tamu']?>" <?=$data_tamu['id_tamu'] == $data['id_tamu'] ? 'selected' : ''?>><?=$data_tamu['nama_tamu']?></option>
                    <?php
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
        <input type="file" accept="image/*" name="bukti_pembayaran" class="form-control">
        <img src="../uploads/<?=$data['bukti_pembayaran']?>" width="100" alt="bukti pembayaran">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
