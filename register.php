<?php
require 'function.php';

$success = '';
$error = '';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email    = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Cek apakah email sudah digunakan
    $check = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Email sudah digunakan!";
    } else {
        $insert = mysqli_query($con, "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')");
        if ($insert) {
            $success = "Akun berhasil dibuat! Silakan login.";
        } else {
            $error = "Gagal mendaftar: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="col-md-4 mx-auto">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Daftar Akun</h4>
            </div>
            <div class="card-body">
                <?php if ($success): ?>
                    <div class="alert alert-success"><?= $success ?></div>
                <?php elseif ($error): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="login.php">Sudah punya akun? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
