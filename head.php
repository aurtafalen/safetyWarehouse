<?php include 'config.php'; 
if (!isset($_SESSION['login'])) header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Safety Warehouse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<nav class="navbar navba-dark bg-secondary px-3">
    <a href="<?php echo BASE_URL; ?>dashboard.php" class="navbar-brand text-decoration-none text-white">Safety Warehouse</a>
    <div>
        <!-- <a href="<?php echo BASE_URL; ?>karyawan/index.php" class="btn btn-sm btn-light">Karyawan</a> -->
        <a href="<?php echo BASE_URL; ?>users/index.php" class="btn btn-sm btn-light">Users</a>
        <a href="<?php echo BASE_URL; ?>barang/index.php" class="btn btn-sm btn-light">Barang</a>
        <a href="<?php echo BASE_URL; ?>logout.php" class="btn btn-sm btn-danger">Logout</a>
    </div>
</nav>
