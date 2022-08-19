<?php
session_start();
//script koneksi
$koneksi = new mysqli("localhost","root","","bus");
?>

<?php

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");

echo "<script>alert('Data Pelanggan Terhapus');</script>";
echo "<script>location='pelanggan.php?pelanggan';</script>";
?>
