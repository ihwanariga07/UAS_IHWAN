<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_nama = $_POST['id_nama'];
$bukti_pembayaran = $_POST['bukti_pembayaran'];


#3. menulis query
$simpan = "INSERT INTO pemesanan (tanggal_checkin,tanggal_checkout,id_tamu,bukti_pembayaran) VALUES ('$tanggal_checkin','$tanggal_checkout',
'$id_nama','$bukti_pembayaran')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>