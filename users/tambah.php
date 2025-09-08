<?php include '../head.php'; ?>

<div class="container mt-4">
  <h3>Tambah User</h3>
  <form method="POST">
    <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <select name="role" class="form-control mb-2">
      <option value="staff">Staff</option>
      <option value="admin">Admin</option>
    </select>
    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
  </form>
</div>

<?php
if (isset($_POST['simpan'])) {
  $u = $_POST['username'];
  $p = md5($_POST['password']);
  $r = $_POST['role'];

  mysqli_query($koneksi, "INSERT INTO users(username, password, role) VALUES('$u', '$p', '$r')");
  header("Location: index.php");
}
?>