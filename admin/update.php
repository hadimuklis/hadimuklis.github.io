<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$Password = $_POST['Password'];
$level = $_POST['level'];

mysql_query("UPDATE user SET nama='$nama', username='$username', Password='$Password' level='level' WHERE id='id'");

header("location:data.php?pesan=update");
?>