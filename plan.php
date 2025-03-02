<?php
include("header.php");

$basicPlans = [
    [
        "name" => "Basic (Message Only)",
        "price" => 1199,
        "features" => [
            "Zero Verified Contacts",
            "Unlimited Messages",
            "Premium Tag",
            "Unlimited Photo Request",
            "Customer Support 10AM-6PM",
            "Profile Boost-up"
        ]
    ],
    [
        "name" => "Silver (Quick Rishta)",
        "price" => 1972,
        "features" => [
            "30 Verified Contacts",
            "Unlimited Messages",
            "Premium Tag",
            "Unlimited Photo Request",
            "Customer Support 10AM-6PM",
            "Profile Boost-up"
        ]
    ],
    [
        "name" => "Gold (Elite Rishta)",
        "price" => 2562,
        "features" => [
            "50 Verified Contacts",
            "Unlimited Messages",
            "Premium Tag",
            "Unlimited Photo Request",
            "Customer Support 10AM-6PM",
            "Profile Boost-up"
        ]
    ]
];

$premiumPlans = [
    [
        "name" => "Platinum (Exclusive Rishta)",
        "price" => 3599,
        "features" => [
            "100 Verified Contacts",
            "Dedicated Matchmaker",
            "Unlimited Messages",
            "Exclusive Premium Tag",
            "Profile Boost-up 2X"
        ]
    ],
    [
        "name" => "Diamond (VIP Rishta)",
        "price" => 4999,
        "features" => [
            "200 Verified Contacts",
            "Personal Matchmaker",
            "Unlimited Messages",
            "VIP Priority Support",
            "Profile Boost-up 3X"
        ]
    ],
    [
        "name" => "Royal (Elite & Beyond)",
        "price" => 7999,
        "features" => [
            "Unlimited Verified Contacts",
            "Personalized Rishta Consultant",
            "Exclusive Membership",
            "Full Profile Customization",
            "Top-tier Matchmaking"
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans</title>
    <style>
        body {
            background-color: #f9f9f9;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .pricing {
            padding: 50px;
            max-width: 1200px;
            margin: auto;
        }

        /* Titles */
        .plan-title {
            color: red;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .main-title {
            font-size: 32px;
            font-weight: bold;
            color: #222;
        }

        /* Toggle Buttons */
        .toggle-container {
            display: flex;
            justify-content: center;
            background: #eee;
            border-radius: 30px;
            padding: 5px;
            width: 250px;
            margin: 20px auto;
            position: relative;
        }

        .toggle-btn {
            flex: 1;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            background: transparent;
            position: relative;
            z-index: 2;
            color: #333;
            transition: 0.3s;
        }

        .toggle-btn.active {
            color: white;
        }

        .toggle-slider {
            position: absolute;
            width: 50%;
            height: 100%;
            background: red;
            border-radius: 30px;
            top: 0;
            left: 0;
            transition: 0.3s;
        }

        .toggle-container.active .toggle-slider {
            left: 50%;
        }

        /* Plans Layout */
        .plans {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        /* Plan Card */
        .plan-card {
            background: #E3F2FD;;
            padding: 30px;
            border-radius: 15px;
            width: 320px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .plan-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .plan-name {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }

        .plan-price {
            font-size: 28px;
            font-weight: bold;
            margin: 10px 0;
            color: #d81b42;
        }

        .plan-price span {
            font-size: 32px;
        }

        .plan-features {
            list-style: none;
            padding: 0;
            font-size: 14px;
            color: #444;
        }

        .plan-features li {
            padding: 8px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .plan-features li::before {
            content: '✅';
            font-weight: bold;
            margin-right: 8px;
        }

        .premium-plans {
            display: none;
        }
    </style>
</head>
<body>

    <section class="pricing" id="pricing">
        <h3 class="plan-title">Pricing Plan</h3>
        <h1 class="main-title">Choose Your Plan</h1>

        <div class="toggle-container" id="toggleContainer">
            <div class="toggle-slider"></div>
            <button class="toggle-btn active" onclick="showBasic()">Basic</button>
            <button class="toggle-btn" onclick="showPremium()">Premium</button>
        </div>

        <!-- Basic Plans -->
        <div class="plans" id="basicPlans">
            <?php foreach ($basicPlans as $plan) { ?>
                <a href="paytm.php?plan=<?php echo urlencode($plan['name']); ?>&price=<?php echo $plan['price']; ?>" 
                   style="text-decoration: none; color: inherit;">
                    <div class="plan-card">
                        <h3 class="plan-name"><?php echo htmlspecialchars($plan['name']); ?></h3>
                        <h2 class="plan-price">Rs <span><?php echo $plan['price']; ?></span> / Month</h2>
                        <ul class="plan-features">
                            <?php foreach ($plan['features'] as $feature) { ?>
                                <li><?php echo $feature; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </a>
            <?php } ?>
        </div>

        <!-- Premium Plans -->
        <div class="plans premium-plans" id="premiumPlans">
            <?php foreach ($premiumPlans as $plan) { ?>
                <a href="paytm.php?plan=<?php echo urlencode($plan['name']); ?>&price=<?php echo $plan['price']; ?>" 
                   style="text-decoration: none; color: inherit;">
                    <div class="plan-card">
                        <h3 class="plan-name"><?php echo htmlspecialchars($plan['name']); ?></h3>
                        <h2 class="plan-price">Rs <span><?php echo $plan['price']; ?></span> / Month</h2>
                        <ul class="plan-features">
                            <?php foreach ($plan['features'] as $feature) { ?>
                                <li><?php echo $feature; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>

    <script>
        function showBasic() {
            document.getElementById("basicPlans").style.display = "flex";
            document.getElementById("premiumPlans").style.display = "none";
            document.getElementById("toggleContainer").classList.remove("active");
        }

        function showPremium() {
            document.getElementById("basicPlans").style.display = "none";
            document.getElementById("premiumPlans").style.display = "flex";
            document.getElementById("toggleContainer").classList.add("active");
        }
    </script>

</body>
</html>
