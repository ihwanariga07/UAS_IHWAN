<?php include("../koneksi.php");

$tanggal_checkin = $_POST['tanggal_checkin'];
$tanggal_checkout = $_POST['tanggal_checkout'];
$id_tamu = $_POST['id_tamu'];

// Proses unggah bukti pembayaran
if (isset($_FILES['bukti_pembayaran']) && $_FILES['bukti_pembayaran']['name'] != "") {
    $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
    $target = "../uploads/" . basename($bukti_pembayaran);

    if (!move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $target)) {
        die("Gagal mengunggah bukti pembayaran.");
    }
}

// Query simpan ke database
$simpan = "INSERT INTO pemesanan (tanggal_checkin, tanggal_checkout, id_tamu, bukti_pembayaran) 
           VALUES ('$tanggal_checkin', '$tanggal_checkout', '$id_tamu', '$nama_foto')";

// Jalankan query
$proses = mysqli_query($koneksi, $simpan);

$upload_foto = move_uploaded_file($tmp_foto,"foto/$nama_foto");

// Redirect ke index
if ($proses) {
    echo "<script>alert('Data berhasil ditambahkan!'); document.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan!'); document.location='index.php';</script>";
}
?>














