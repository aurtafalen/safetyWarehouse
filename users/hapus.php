<?php include '../head.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM users WHERE id=$id");
header("Location: index.php");
?>