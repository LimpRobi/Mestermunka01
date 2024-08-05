<?php
include 'connect.php'; // Include database connection

$error = ''; // Hibaüzenet inicializálása

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = 'A felhasználónév és a jelszó megadása kötelező!';
    } else {
        // Ellenőrizd a felhasználót az adatbázisban
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");
        $stmt->execute(['username' => $username, 'password' => $password]);
        
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($admin) {
            setcookie('admin_id', $admin['id'], time() + (86400 * 30), "/"); // 30 napos süti
            header('Location: admin.php'); // Átirányítás az admin oldalra
            exit;
        } else {
            $error = 'Hibás felhasználónév vagy jelszó!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Admin Bejelentkezés</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Felhasználónév</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Jelszó</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Bejelentkezés</button>
        </form>
    </div>
</body>
</html>