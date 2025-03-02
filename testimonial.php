
<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .testimonial-section {
            text-align: center;
            padding: 50px 0;
        }
        .testimonial-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .testimonial-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            max-width: 900px;
            margin: auto;
            overflow: hidden;
        }
        .testimonial-card {
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            border-radius: 10px;
            transition: all 0.5s ease-in-out;
            opacity: 0.5;
            width: 250px;
            text-align: center;
            margin: 0 10px;
            background: white;
            border: 2px solid #d31a50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(0.9);
        }
        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .testimonial-card.active {
            background: #d31a50;
            color: white;
            opacity: 1;
            transform: scale(1.1);
        }
        .testimonial-card h5 {
            margin: 5px 0;
            font-size: 18px;
        }
        .testimonial-card .review-rating i {
            color: gold;
        }
        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #d31a50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .nav-button:hover {
            background: #a31340;
        }
        .nav-button.left {
            left: 10px;
        }
        .nav-button.right {
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="testimonial-section">
        <h1 class="text-danger">Testimonial</h1>
        <h2 class="testimonial-title">What Say Our Clients!</h2>
        <div class="testimonial-container">
            <button class="nav-button left" onclick="prevSlide()">&#10094;</button>
            <div id="testimonial-wrapper" class="d-flex"></div>
            <button class="nav-button right" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <script>
        const reviews = [
            { name: "Rahul Yadav", profession: "Developer", image: "https://randomuser.me/api/portraits/men/1.jpg", text: "Great service and amazing support!", rating: 5 },
            { name: "Jitendra Yadav", profession: "Designer", image: "https://randomuser.me/api/portraits/men/2.jpg", text: "Highly recommended, very professional!", rating: 5 },
            { name: "Jawed Akthar", profession: "Marketer", image: "https://randomuser.me/api/portraits/men/3.jpg", text: "Excellent work and dedication.", rating: 4 },
            { name: "Sonia Mehta", profession: "CEO", image: "https://randomuser.me/api/portraits/women/4.jpg", text: "Fantastic results, exceeded expectations!", rating: 5 },
            { name: "Amit Sharma", profession: "Freelancer", image: "https://randomuser.me/api/portraits/men/5.jpg", text: "Very satisfied with the work.", rating: 4 },
            { name: "Neha Singh", profession: "HR Manager", image: "https://randomuser.me/api/portraits/women/6.jpg", text: "A truly talented team!", rating: 5 },
            { name: "Rohit Verma", profession: "Consultant", image: "https://randomuser.me/api/portraits/men/7.jpg", text: "Great insights and execution!", rating: 5 },
            { name: "Priya Das", profession: "Software Engineer", image: "https://randomuser.me/api/portraits/women/8.jpg", text: "Their skills are top-notch!", rating: 5 },
            { name: "Vikas Malhotra", profession: "Project Manager", image: "https://randomuser.me/api/portraits/men/9.jpg", text: "Smooth workflow and communication!", rating: 4 },
            { name: "Simran Kaur", profession: "Content Writer", image: "https://randomuser.me/api/portraits/women/10.jpg", text: "Would love to collaborate again!", rating: 5 }
        ];

        const wrapper = document.getElementById("testimonial-wrapper");
        let currentIndex = 0;

        function displayReviews() {
            wrapper.innerHTML = "";
            reviews.forEach((review, index) => {
                const div = document.createElement("div");
                div.classList.add("testimonial-card");
                if (index === currentIndex) div.classList.add("active");
                div.innerHTML = `
                    <img src="${review.image}" alt="${review.name}">
                    <h5>${review.name}</h5>
                    <p class="text-muted">${review.profession}</p>
                    <p>${review.text}</p>
                    <div class="review-rating">
                        ${'<i class="fas fa-star"></i>'.repeat(review.rating)}
                        ${'<i class="far fa-star"></i>'.repeat(5 - review.rating)}
                    </div>
                `;
                wrapper.appendChild(div);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % reviews.length;
            displayReviews();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + reviews.length) % reviews.length;
            displayReviews();
        }

        setInterval(nextSlide, 3000);
        displayReviews();
    </script>
</body>
</html>
