<?php include '../head.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM users WHERE id=$id"));
?>

<div class="container mt-4">
  <h3>Edit User</h3>
  <form method="POST">
    <input type="text" name="username" class="form-control mb-2" value="<?php echo $data['username']; ?>" required>
    <select name="role" class="form-control mb-2">
      <option value="staff" <?php if($data['role']=='staff') echo 'selected'; ?>>Staff</option>
      <option value="admin" <?php if($data['role']=='admin') echo 'selected'; ?>>Admin</option>
    </select>
    <button type="submit" name="update" class="btn btn-warning">Update</button>
  </form>
</div>

<?php
if (isset($_POST['update'])) {
  $u = $_POST['username'];
  $r = $_POST['role'];

  mysqli_query($koneksi, "UPDATE users SET username='$u', role='$r' WHERE id=$id");
  header("Location: index.php");
}
?>