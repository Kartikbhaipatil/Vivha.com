<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "vivha_php";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching user input and validating
$mr_ms = isset($_GET['Mr_Ms']) ? trim($_GET['Mr_Ms']) : '';
$min_age = isset($_GET['min_age']) ? (int)$_GET['min_age'] : 0;
$max_age = isset($_GET['max_age']) ? (int)$_GET['max_age'] : 100;
$state = isset($_GET['state']) ? trim($_GET['state']) : '';
$sub_community = isset($_GET['sub_community']) ? trim($_GET['sub_community']) : '';

// Debugging: Check received values
if (empty($mr_ms) || empty($state) || empty($sub_community) || $min_age <= 0 || $max_age <= 0 || $min_age > $max_age) {
    echo "<h3 style='color:red;'>Error: All fields are required, and min age must be less than max age.</h3>";
    exit;
}

// Prepare SQL query
$sql = "SELECT name, gender, age, Mr_Ms, state, sub_community, phone, city, email, profile_image FROM users 
        WHERE Mr_Ms = ? 
        AND age BETWEEN ? AND ? 
        AND state = ? 
        AND sub_community = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("siiss", $mr_ms, $min_age, $max_age, $state, $sub_community);
$stmt->execute();
$result = $stmt->get_result();

// Display results
echo "<h2>Search Results</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Name</th><th>Gender</th><th>Age</th><th>Mr/Ms</th><th>State</th><th>Sub-Community</th><th>Phone</th><th>City</th><th>Email</th><th>Profile Image</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['gender']) . "</td>
                <td>" . htmlspecialchars($row['age']) . "</td>
                <td>" . htmlspecialchars($row['Mr_Ms']) . "</td>
                <td>" . htmlspecialchars($row['state']) . "</td>
                <td>" . htmlspecialchars($row['sub_community']) . "</td>
                <td>" . htmlspecialchars($row['phone']) . "</td>
                <td>" . htmlspecialchars($row['city']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td><img src='uploads/" . htmlspecialchars($row['profile_image']) . "' width='50' height='50'></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h3>No matches found.</h3>";
}

// Close connection
$stmt->close();
$conn->close();
?>
