<?php
include("../koneksi.php");

$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_tamu = $_POST['id_tamu'];
$bukti_pembayaran = $_POST ['bukti_pembayaran'];
// Proses unggah bukti pembayaran
$bukti_pembayaran = "";
if (isset($_FILES['foto']) && $_FILES['foto']['name'] != "") {
    $bukti_pembayaran = $_FILES['foto']['name'];
    $target = "../uploads/" . basename($bukti_pembayaran);

    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        die("Gagal mengunggah bukti pembayaran.");
    }
}

// Query simpan ke database
$simpan = "INSERT INTO pemesanan (tanggal_checkin, tanggal_checkout, id_tamu, bukti_pembayaran) 
           VALUES ('$tanggal_checkin', '$tanggal_checkout', '$id_tamu', '$bukti_pembayaran')";

// Jalankan query
$proses = mysqli_query($koneksi, $simpan);

// Redirect ke index
if ($proses) {
    echo "<script>alert('Data berhasil ditambahkan!'); document.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan!'); document.location='index.php';</script>";
}
?>
