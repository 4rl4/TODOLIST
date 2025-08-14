<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Halo, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
