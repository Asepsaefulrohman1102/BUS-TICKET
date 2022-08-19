<?php
session_start();
//script koneksi
$koneksi = new mysqli("localhost","root","","toko_online");
?>

<?php

$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");

echo "<script>alert('Data Admin Terhapus');</script>";
echo "<script>location='admin.php?admin';</script>";
?>
