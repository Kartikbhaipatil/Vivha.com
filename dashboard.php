<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include("db_connect.php");
$user_id = $_SESSION['user_id'];

// Fetch user details including profile image
$sql = "SELECT name, email, phone, city, state, gender, age, profile_image FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Set the profile image path (Use default if empty)
$imagePath = !empty($user['profile_image']) ? "uploads/" . $user['profile_image'] : "uploads/2.jpeg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: auto;
            overflow: hidden;
            display:flex;
            justify-content:center;
        }
        .header {
            background: #d81b42;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .profile-section {
            display: flex;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            align-items: center;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #d81b42;
            margin-right: 20px;
        }
        .profile-details {
            flex-grow: 1;
        }
        .profile-details h2 {
            color: #d81b42;
            margin-bottom: 10px;
        }
        .profile-details p {
            margin: 5px 0;
            font-size: 16px;
        }
        .dashboard-links {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .dashboard-links a {
            background: #d81b42;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .dashboard-links a:hover {
            background: #b31535;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    </div>

    <div class="dashboard-links">
        <a href="matches.php">View Matches</a>
        <a href="messages.php">Messages</a>
        <a href="profile_edit.php">Edit Profile</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container">
        <div class="profile-section">
            <!-- Profile Image -->
            <img src="<?php echo htmlspecialchars($imagePath); ?>" alt="Profile Image" class="profile-image">

            <!-- User Details -->
            <div class="profile-details">
                <h2>Your Profile</h2>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
                <p><strong>City:</strong> <?php echo htmlspecialchars($user['city']); ?></p>
                <p><strong>State:</strong> <?php echo htmlspecialchars($user['state']); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($user['gender']); ?></p>
                <p><strong>Age:</strong> <?php echo htmlspecialchars($user['age']); ?></p>
            </div>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
<?php

include("Plans_footer.php");

?>
<script src="script.js"></script>