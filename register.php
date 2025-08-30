<?php
include 'db.php';

$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        $msg = "Registration successful! <a href='login.php'>Login here</a>";
    } else {
        $msg = "Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Register</h2>
    <form method="post" onsubmit="return validateRegister()">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" id="reg_pass" name="password" placeholder="Password" required><br>
        <input type="password" id="reg_cpass" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p><?php echo $msg; ?></p>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>
<script src="script.js"></script>
</body>
</html>