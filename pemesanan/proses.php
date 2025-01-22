







<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_tamu = $_POST['id_tamu'];


$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO pemesanan (tanggal_checkin,tanggal_checkout,id_tamu,bukti_pembayaran) 
VALUES ('$tanggal_checkin','$tanggal_checkout','$id_tamu','$nama_foto')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1. Proses Upload File
$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>