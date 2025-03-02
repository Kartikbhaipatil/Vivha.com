<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include("payment_header.php");
include("db_connect.php");

// Fetch user payments
$user_id = $_SESSION['user_id'];
$sql = "SELECT payment_id, amount, status, created_at FROM payments WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Razorpay API Key
$razorpay_key = "YOUR_RAZORPAY_KEY_ID";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Dashboard</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-container {
            margin: 50px auto;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .pay-button {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        .pay-button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h2>Payment Dashboard</h2>
        </div>

        <h4 class="mt-3">Make a Payment</h4>
        <button class="pay-button" onclick="payNow()">Pay ₹3599</button>

        <h4 class="mt-4">Transaction History</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['payment_id']); ?></td>
                        <td>₹<?php echo htmlspecialchars($row['amount']); ?></td>
                        <td><span class="badge bg-success"><?php echo htmlspecialchars($row['status']); ?></span></td>
                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function payNow() {
        var options = {
            "key": "<?php echo $razorpay_key; ?>",
            "amount": 359900, // 359900 paise = ₹3599
            "currency": "INR",
            "name": "Your Business",
            "description": "Test Transaction",
            "image": "your-logo.png",
            "handler": function (response) {
                alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
                window.location.href = "payment_success.php?payment_id=" + response.razorpay_payment_id;
            },
            "theme": {
                "color": "#007bff"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
