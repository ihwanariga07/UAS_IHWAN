<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_tamu = $_POST['id_tamu'];
$nama_tamu= $_POST['nama_tamu'];
$nomor_identitas = $_POST['nomor_identitas'];


#3. menulis query
$sunting = "UPDATE tamu SET nama_tamu='$nama_tamu', nomor_identitas='$nomor_identitas' WHERE id_tamu='$id_tamu'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>