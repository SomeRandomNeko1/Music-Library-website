<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My Website</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
