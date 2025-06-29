<?php
// Proses login saat form dikirim
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Data login yang benar (bisa kamu ubah)
    $user_benar = "admin";
    $pass_benar = "12345";

    // Validasi login
    if ($username == $user_benar && $password == $pass_benar) {
        // Redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // Jika salah
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Halaman Login</h2>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
