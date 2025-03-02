<?php
include("login_header.php");
session_start();
include("db_connect.php");

$loginError = ""; // Variable to store error messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $loginError = "⚠️ Please enter both email and password!";
    } else {
        // Prepare SQL query
        $sql = "SELECT id, name, email, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $name, $email, $hashed_password);
            $stmt->fetch();

            // Check if the password is correct
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                $_SESSION['email'] = $email;
                
                // Redirect to dashboard
                header("Location: dashboard.php");
                exit();
            } else {
                $loginError = "❌ Incorrect password!";
            }
        } else {
            $loginError = "❌ No account found with this email!";
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        .container {
            background: white; padding: 40px; border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center; width: 450px;
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
        }
        .container h2 { margin-bottom: 15px; color: #333; }
        .input-box { position: relative; margin-bottom: 20px; }
        .input-box input {
            width: 100%; padding: 10px; border: 2px solid #ccc; border-radius: 8px;
            font-size: 16px; transition: 0.3s;
        }
        .input-box input:focus { border-color: #6a11cb; outline: none; }
        .input-box label {
            position: absolute; left: 12px; top: 12px; color: #777;
            font-size: 14px; transition: 0.3s; pointer-events: none;
        }
        .input-box input:focus ~ label, .input-box input:not(:placeholder-shown) ~ label {
            top: -10px; left: 10px; font-size: 12px; color: #6a11cb;
            background: white; padding: 2px 5px;
        }
        .input-box .toggle-password {
            position: absolute; right: 12px; top: 10px; cursor: pointer;
            color: #777; font-size: 18px;
        }
        .remember-forgot { display: flex; justify-content: space-between; font-size: 14px; margin-bottom: 15px; }
        .remember-forgot a { text-decoration: none; color: #6a11cb; font-weight: bold; }
        .btn {
            width: 100%; background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none; padding: 12px; color: white;
            font-size: 16px; border-radius: 8px; cursor: pointer; transition: 0.3s;
        }
        .btn:hover { opacity: 0.9; }
        .error-msg { color: red; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <!-- Show login error message if any -->
    <?php if (!empty($loginError)) { echo "<p class='error-msg'>$loginError</p>"; } ?>

    <form action="login.php" method="POST">
        <div class="input-box">
            <input type="email" name="email" id="email" required>
            <label for="email">Email</label>
        </div>

        <div class="input-box">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
            <span class="toggle-password" onclick="togglePassword()">👁️</span>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox"> Remember Me</label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="signup">
            Don't have an account? <a href="register.php">Sign Up</a>
        </div>
    </form>
</div>

</body>
</html>
