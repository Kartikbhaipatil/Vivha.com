<?php
if (!isset($_GET['plan']) || !isset($_GET['price'])) {
    die("Invalid request.");
}

$plan = htmlspecialchars($_GET['plan']);
$price = (int) $_GET['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .payment-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .pay-btn {
            background: #d81b42;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>Payment for <?php echo $plan; ?></h1>
<div class="payment-box">
    <h2>Rs <?php echo $price; ?> / Month</h2>
    <p>Proceed with Razorpay</p>
    <form action="razorpay_payment.php" method="POST">
        <input type="hidden" name="plan" value="<?php echo $plan; ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        <button type="submit" class="pay-btn">Pay Now</button>
    </form>
</div>

</body>
</html>
