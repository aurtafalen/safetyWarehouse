<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - CRUD App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow-lg p-4" style="width: 350px;">
    <h4 class="text-center mb-3">Login</h4>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        $_SESSION['user'] = $row;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

</body>
</html>