<?php 
include("adminnpet/config.php");

$namapemilik = $_POST['namapemilik'];
$namahewan = $_POST['namahewan'];
$jenis = $_POST['jenis'];
$sakit = $_POST['sakit'];
$nohp = $_POST['nohp'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi,"insert into tabelpelayanan values('','$namapemilik','$namahewan','$jenis','$sakit','$nohp','$tanggal','$waktu','$keterangan')");
header("location:pelayanan.php")
?>