

<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$email = $_POST['email'];
$username = $_POST['username'];

$password = $_POST['password'];


#3. menulis query
$simpan = "INSERT INTO users (email,password,nama) VALUES ('$username','$email',
'$password')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="../frontpage.php";
</script>