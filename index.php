<?php include 'headUser.php';?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
    $sql = "SELECT * FROM barang LIMIT 8";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stok = $row['stok'];
            $nama_barang = $row['nama_barang'];
            echo '
            <div class="col">
              <div class="card h-100 text-center shadow">
                <div class="card-body">
                  <h2 class="card-title mb-3">' . htmlspecialchars($stok) . '</h2>
                  <p class="card-text text-muted">' . htmlspecialchars($nama_barang) . '</p>
                </div>
              </div>
            </div>
            ';
        }
    } else {
        echo '<p class="text-center">Tidak ada data barang.</p>';
    }
    ?>
  </div>
</div>
</body>
</html>