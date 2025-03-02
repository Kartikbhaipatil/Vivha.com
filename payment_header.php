<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivha.Com</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(135deg, #d81b42, #b81738);
            padding: 15px 10px;
            box-shadow: 0 4px 6px rgba(23, 3, 3, 0.8);
            width: 100%;
            margin-bottom: 30px;
            position: sticky;
            height: 67px;
        }

        /* Left Side: Logo & Heading */
        .nav-left {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 40px;
            width: 40px;
            margin-right: 10px;
        }

        .heading {
            font-size: 22px;
            font-weight: bold;
            color: #f7f7f7;
        }

        /* Right Side: Links, Search, and Buttons */
        .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links li a {
            text-decoration: none;
            color: #f7f7f7;
            font-size: 16px;
            transition: color 0.3s ease-in-out;
        }

        .nav-links li a:hover {
            color:rgb(252, 224, 152);
        }

        /* Search Bar */
        .search-box {
            margin-left: 20px;
        }

        .search-box input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            width: 150px;
        }
        /* General Button Styles */
        .btn {
            display: inline-block;
            font-size: 19px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            padding: 10px 15px; 
            transition: all 0.3s ease-in-out;
            text-align: center;
            min-width: 100px; 
            margin: auto; 
        }

       
        /* logout Button */
        .btn.logout {
            background: rgb(221, 206, 42);
            color: white;
            margin:0px 10px;
        }

        .btn.logout:hover {
            background: rgb(52, 169, 14);
            transform: scale(1.05);
        }
/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .nav-right {
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .search-box {
        margin-top: 10px;
    }
    .btn {
    min-width: 120px;
    font-size: 16px;
    padding: 12px 20px;
    }

    .auth-buttons {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
    }
}
    </style>
</head>
<body>

    <nav class="navbar">
        <!-- Left Side: Logo & Heading -->
        <div class="nav-left">
            <img src="logo.png" alt="Logo" class="logo">
            <h1 class="heading">Vivha.Com</h1>
        </div>

        <!-- Right Side: Links, Search, and Buttons -->
        <div class="nav-right">
            <ul class="nav-links">
                <li><a href="main.php">Home</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="plan.php">Plan</a></li>
                <li><a href="testimonial.php">Review</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <div class="search-box">
                <input type="text" placeholder="Search...">
            </div>

           <a href="main.php"> <button class="btn logout">Logout</button> </a>
           
        </div>
    </nav>

</body>
</html>
