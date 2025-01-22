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
