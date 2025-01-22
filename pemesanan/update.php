<?php

include("../koneksi.php");


$id = $_POST['id'];
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_nama = $_POST['id_nama'];
$bukti_pembayaran = $_POST['bukti_pembayaran'];


#menulis query
$sunting = "UPDATE pemesanan SET tanggal_checkin='$tanggal_checkin', tanggal_checkout='$tanggal_checkout', id_nama='$id_nama',
bukti_pembayaran='$bukti_pembayaran' WHERE id='$id'";

# jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>