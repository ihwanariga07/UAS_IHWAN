<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_tamu = $_POST['nama_tamu'];
$nomor_identitas = $_POST['nomor_identitas'];


#3. menulis query
$simpan = "INSERT INTO tamu (nama_tamu,nomor_identitas) VALUES ('$nama_tamu','$nomor_identitas')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>