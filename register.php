<?php
include("register_header.php");

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "vivha_php";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $gender = trim($_POST['gender']);
    $age = (int) $_POST['age'];
    $password = trim($_POST['password']);

    // Validate input fields
    if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($state) || empty($gender) || empty($age) || empty($password)) {
        die("All fields are required!");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }
    if ($age < 10 || $age > 100) {
        die("Age must be between 10 and 100!");
    }
    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long!");
    }

    // Hash Password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Ensure the uploads directory exists
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // Create directory with full permissions
    }

    // Image Upload Handling
    if (!isset($_FILES["profile_image"]) || $_FILES["profile_image"]["error"] != 0) {
        die("Error: No image uploaded or an error occurred.");
    }

    $image_name = basename($_FILES["profile_image"]["name"]);
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow certain file formats
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        die("Only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Move file to uploads directory
    if (!move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
        die("Error uploading image.");
    }

    // Check if email already exists
    $check_email = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($check_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Error: This email is already registered!");
    } else {
        // Insert Data
        $sql = "INSERT INTO users (name, email, phone, city, state, gender, age, password, profile_image) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssiss", $name, $email, $phone, $city, $state, $gender, $age, $hashed_password, $image_name);

        if ($stmt->execute()) {
            echo "Registration successful!";
            header("refresh:2; url=login.php"); // Redirect to login page after 2 seconds
        } else {
            die("Error: " . $stmt->error);
        }
    }
    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .container {
            background: white;
            max-width: 400px;
            margin:auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
            margin-bottom:20px;
        }

        h2 {
            color: #d81b42;
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn {
            background: rgb(82, 68, 231);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 50%;
            margin-top: 10px;
            align-items:center;
            margin-left:25%;
        }

        .btn:hover {
            background: rgb(60, 50, 180);
        }
        
        /* Responsive */
        @media (max-width: 480px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required placeholder="Enter your city">
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Bengal">Bengal</option>
                <option value="Rajasthan">Rajasthan</option>
               
            </select>
        </div>

        <div class="form-group">
            <label for="sub_community">Sub-Community</label>
            <select id="sub_community" name="sub_community" required>
                <option value="">Select Sub-Community</option>
                <option value="Leva-Patil">Leva-Patil</option>
                <option value="Patel">Patel</option>
                <option value="Bengali">Bengali</option>
                <option value="Marwadi">Marwadi</option>
                
            </select>
        </div>

        <div class="form-group">
            <label for="Mr_Ms">Mr/Ms</label>
            <select id="Mr_Ms" name="Mr_Ms" required>
                <option value="">Select Type</option>
                <option value="Groom">Groom</option>
                <option value="Bride">Bride</option>
            </select>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" min="10" max="100" required placeholder="Enter your age">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter a strong password">
        </div>

        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" id="profile_image" name="profile_image" accept="image/*" required>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>
</div>

</body>
</html>