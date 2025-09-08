<?php include '../head.php'; 
?>

<div class="container mt-4">
  <h3>Data Barang</h3>
  <a href="tambah.php" class="btn btn-primary mb-2">+ Tambah Barang</a>
  <table class="table table-bordered">
    <tr>
      <th>ID</th><th>Nama Barang</th><th>Stok</th><th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM barang");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nama_barang']."</td>
        <td>".$row['stok']."</td>
        <td>
          <a href='edit.php?id=".$row['id']."' class='btn btn-sm btn-warning'>Edit</a>
          <a href='hapus.php?id=".$row['id']."' class='btn btn-sm btn-danger'
          onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</div>