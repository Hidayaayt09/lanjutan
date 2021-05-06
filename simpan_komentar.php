<?php 
include("adminnpet/config.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$tgl = date("Y-m-d");
$aktif = $_POST['aktif'];

mysqli_query($koneksi,"insert into tabelkomentar values('','$nama','$email','$komentar','$tgl','$aktif')");
header("location:pelayanan.php")
?>
