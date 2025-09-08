<?php include '../head.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM barang WHERE id=$id"));
?>

<div class="container mt-4">
  <h3>Edit User</h3>
  <form method="POST">
    <input type="text" name="nama_barang" class="form-control mb-2" value="<?php echo $data['nama_barang']; ?>" required>
     <!-- <input type="number" name="harga" class="form-control mb-2" value="<?php echo $data['harga']; ?>" required> -->
      <input type="number" name="stok" class="form-control mb-2" value="<?php echo $data['stok']; ?>" required>
    <button type="submit" name="update" class="btn btn-warning">Update</button>
  </form>
</div>

<?php
if (isset($_POST['update'])) {
  $n = $_POST['nama_barang'];
  // $h = ($_POST['harga']);
  $s = $_POST['stok'];

  mysqli_query($koneksi, "UPDATE barang SET nama_barang='$n', stok='$s' WHERE id=$id");
  header("Location: index.php");
}
?>