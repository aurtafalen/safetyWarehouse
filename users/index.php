<?php include '../head.php'; ?>

<div class="container mt-4">
  <h3>Data Users</h3>
  <a href="tambah.php" class="btn btn-primary mb-2">+ Tambah User</a>
  <table class="table table-bordered">
    <tr>
      <th>ID</th><th>Username</th><th>Role</th><th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM users");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['username']."</td>
        <td>".$row['role']."</td>
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