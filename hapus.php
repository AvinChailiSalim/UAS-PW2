<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM rank WHERE id='$id'";
mysqli_query($kon,$query);
 
header("location:index.php?pesan=hapus");
?>