<head>  
    <style> 
      .pricing {
            padding: 50px;
            margin-left: 40px;
            margin-right: 40px;
        }
            
        /* Heading */
        .plan-title {
            color: red;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
        .main-title {
            font-size: 24px;
            font-weight: bold;
            color: #222;
            text-align: center;
        }

        /* Toggle Button */
        .toggle-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .toggle-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            background: #eee;
            transition: 0.3s;
        }

        .toggle-btn.active {
            background: red;
            color: white;
        }
        /* Plans */
        .plans {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        /* Plan Card */
        .plan-card {
            background: #E3F2FD;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: (transform 0.5s ease-out, opacity 0.5s ease-out);
        }




        /* Plan Name */
        .plan-name {
            color: red;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        /* Price */
        .plan-price {
            font-size: 24px;
            text-align: center;
            font-weight: bold;
            margin: 10px 0;
        }

        .plan-price span {
            font-size: 28px;
        }

        /* Features List */
        .plan-features {
            list-style: none;
            padding: 0;
            font-size: 14px;
            color: #444;
        }

        .plan-features li {
            padding: 5px 0;
        }




        .plan-card.hidden {
            transform: translateX(-100%);
            opacity: 0;
            position: absolute;
        }

        .premium-plans {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            opacity: 0;
            transform: translateX(100%);
            transition: transform 0.5s ease-out, opacity 0.5s ease-out;
        }

        .premium-plans.active {
            opacity: 1;
            transform: translateX(0);
        }

        .plan-name {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .plan-price {
            font-size: 22px;
            margin-bottom: 15px;
            color: #d81b42;
        }

        .plan-features {
            list-style: none;
            padding: 0;
        }

        .plan-features li {
            padding: 5px 0;
        }

        /*---------------------------------------------------------------------------*/
        /* Testimonial Section */
        .testimonial-section {
            text-align: center;
            padding: 50px 0;
            background: #f8f8f8;
        }

        .testimonial-title {
            font-size: 20px;
            color: #d81b42;
            font-weight: bold;
        }

        .testimonial-heading {
            font-size: 30px;
            margin-bottom: 20px;
        }

        /* Testimonial Container */
        .testimonial-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            max-width: 800px;
            margin: auto;
        }

        /* Testimonial Slider */
        .testimonial-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: calc(100% * 6); /* Adjust based on the number of testimonials */
        }

        /* Individual Testimonial */
        .testimonial {
            width: 260px;
            background: white;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex-shrink: 0;
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .testimonial-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .testimonial-text {
            font-size: 14px;
            color: #555;
        }

        .btn-1 {
            background: #d81b42;
            color: white;
            border: none;
            font-size: 30px;
            width: 120px;
            height: 40px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            transition: 0.3sease-in-out;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .btn-2 {
            background: #d81b42;
            color: white;
            border: none;
            font-size: 30px;
            width: 120px;
            height: 40px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            transition: 0.3sease-in-out;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }


        .left-btn {
            left: -80px; 
        }

        .right-btn {
            right: -80px;
        }

        /* Ensure buttons remain visible on smaller screens */
        @media (max-width: 768px) {
            .left-btn {
                left: 5px;
            }

            .right-btn {
                right: 5px;
            }
        }

        .nav-btn:hover {
            background: #b81738;
        }

        /*----------------------------------------------------------------------------------------*/
        /* Contact Container */
        .contact-container {
            width: 50%;
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: 320px;
            margin-top: 50px;
        }

        /* Contact Title */
        .contact-title {
            color: #d81b42;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Contact Heading */
        .contact-heading {
            font-size: 28px;
            font-weight: bold;
            color: #2c2c2c;
            margin-bottom: 20px;
        }

        /* Form Styling */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input Fields */
        .input-group {
            display: flex;
            gap: 15px;
        }

        .input-group input {
            width: 50%;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: 0.3s;
        }

        /* Input Focus Effect */
        input:focus, textarea:focus {
            border-color: #d81b42;
            outline: none;
            box-shadow: 0px 0px 8px rgba(216, 27, 66, 0.3);
        }

        /* Textarea */
        textarea {
            height: 120px;
            resize: vertical;
        }

        /* Send Button */
        button {
            background: #d81b42;
            color: white;
            padding: 14px 20px;
            font-size: 16px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
            width: 20%;
        }

        button:hover {
            background: #b81738;
        }
        /*--------------------------------------------------------------------------------*/
        /* Footer Container */
        footer {
            background: linear-gradient(135deg, #d81b42, #b81738);
            color: white;
            padding: 50px 0;
            margin-top: 40px;
        }

        .footer-container {
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-section {
            flex: 1;
            min-width: 220px;
            margin: 10px;
        }

        .footer-section h2 {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .footer-section p {
            font-size: 14px;
            line-height: 1.6;
        }

        /* Quick Links & Locations */
        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin: 8px 0;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: white;
            font-size: 14px;
            transition: 0.3s;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        /* Contact Info */
        .footer-section p {
            margin-right: 8px;
        }

        /* Social Icons */
        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: white;
            font-size: 18px;
            margin: 0 8px;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #ffcccc;
        }

        /* Footer Bottom */
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }

        .footer-bottom p {
            font-size: 14px;
        }

        .footer-bottom a {
            color: white;
            text-decoration: none;
            margin: 0 8px;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<section class="pricing" id="pricing">
        <h3 class="plan-title">Pricing Plan</h3>
        <h1 class="main-title">Choose Your Plan</h1>

        <div class="toggle-container">
            <button class="toggle-btn active" onclick="showBasic()">Basic</button>
            <button class="toggle-btn" onclick="showPremium()">Premium</button>
        </div>

          <!-- Basic Plans -->
          <div class="plans" id="basicPlans">
            <div class="plan-card">
                <h3 class="plan-name">Basic (Message Only)</h3>
                <h2 class="plan-price">Rs <span>1199</span> / Month</h2>
                <ul class="plan-features">
                    <li>Zero Verified Contacts ✅</li>
                    <li>Unlimited Message ✅</li>
                    <li>Premium Tag ✅</li>
                    <li>Unlimited Photo Request ✅</li>
                    <li>Customer Support 10AM-6PM ✅</li>
                    <li>Profile Boost-up ✅</li>
                </ul>
            </div>

            <div class="plan-card">
                <h3 class="plan-name">Silver (Quick Rishta)</h3>
                <h2 class="plan-price">Rs <span>1972</span> / Month</h2>
                <ul class="plan-features">
                    <li>30 Verified Contacts ✅</li>
                    <li>Unlimited Message ✅</li>
                    <li>Premium Tag ✅</li>
                    <li>Unlimited Photo Request ✅</li>
                    <li>Customer Support 10AM-6PM ✅</li>
                    <li>Profile Boost-up ✅</li>
                </ul>
            </div>

            <div class="plan-card">
                <h3 class="plan-name">Gold (Elite Rishta)</h3>
                <h2 class="plan-price">Rs <span>2562</span> / Month</h2>
                <ul class="plan-features">
                    <li>50 Verified Contacts ✅</li>
                    <li>Unlimited Message ✅</li>
                    <li>Premium Tag ✅</li>
                    <li>Unlimited Photo Request ✅</li>
                    <li>Customer Support 10AM-6PM ✅</li>
                    <li>Profile Boost-up ✅</li>
                </ul>
            </div>
        </div>
         <!-- Premium Plans -->
        <div class="premium-plans" id="premiumPlans">
            <div class="plan-card">
                <h3 class="plan-name">Platinum (Exclusive Rishta)</h3>
                <h2 class="plan-price">Rs <span>3599</span> / Month</h2>
                <ul class="plan-features">
                    <li>100 Verified Contacts ✅</li>
                    <li>Dedicated Matchmaker ✅</li>
                    <li>Unlimited Messages ✅</li>
                    <li>Exclusive Premium Tag ✅</li>
                    <li>Profile Boost-up 2X ✅</li>
                </ul>
            </div>

            <div class="plan-card">
                <h3 class="plan-name">Diamond (VIP Rishta)</h3>
                <h2 class="plan-price">Rs <span>4999</span> / Month</h2>
                <ul class="plan-features">
                    <li>200 Verified Contacts ✅</li>
                    <li>Personal Matchmaker ✅</li>
                    <li>Unlimited Messages ✅</li>
                    <li>VIP Priority Support ✅</li>
                    <li>Profile Boost-up 3X ✅</li>
                </ul>
            </div>

            <div class="plan-card">
                <h3 class="plan-name">Royal (Elite & Beyond)</h3>
                <h2 class="plan-price">Rs <span>7999</span> / Month</h2>
                <ul class="plan-features">
                    <li>Unlimited Verified Contacts ✅</li>
                    <li>Personalized Rishta Consultant ✅</li>
                    <li>Exclusive Membership ✅</li>
                    <li>Full Profile Customization ✅</li>
                    <li>Top-tier Matchmaking ✅</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="testimonial-section" id="testimonial">
        <h3 class="testimonial-title">Testimonial</h3>
        <h1 class="testimonial-heading">What Say Our Clients!</h1>

        <div class="testimonial-container">
            <button class="btn-1 left-btn">&lt;</button>

            <div class="testimonial-slider">
                <div class="testimonial">
                    <img src="images/blog/1.jpeg" alt="User 1">
                    <div class="testimonial-info">
                        <h3>Shatrudhan Sharma</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="images/blog/10.jpeg" alt="User 2">
                    <div class="testimonial-info">
                        <h3>Kaushal Patil</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="images/blog/11.jpeg" alt="User 3">
                    <div class="testimonial-info">
                        <h3>Piyus Chaudhari</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="images/blog/15.jpeg" alt="User 4">
                    <div class="testimonial-info">
                        <h3>Kartik Kumar</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="images/blog/3.jpeg" alt="User 5">
                    <div class="testimonial-info">
                        <h3>Harshad Mehta</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>

                <div class="testimonial">
                    <img src="images/blog/5.jpeg" alt="User 6">
                    <div class="testimonial-info">
                        <h3>Tejas Kumar</h3>
                        <p class="profession">Profession</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.</p>
                    </div>
                </div>
            </div>

            <button class="btn-2 right-btn">&gt;</button>
        </div>
    </section>
    <section class="contact-container" id="contact">
        <div class="contact-box">
            <h3 class="contact-title">Contact Us</h3>
            <h2 class="contact-heading">Get In Touch!</h2>
            <form class="contact-form">
                <div class="input-group">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                </div>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h2>Muslim Nikah</h2>
                <p>Connecting Muslim Brides & Grooms Globally for Nikah. We are committed to helping you find the one destined for you.</p>
            </div>

            <div class="footer-section links">
                <h2>Quick Link</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>

            <div class="footer-section locations">
                <h2>Search By Location</h2>
                <ul>
                    <li><a href="#">India</a></li>
                    <li><a href="#">Pakistan</a></li>
                    <li><a href="#">Bangladesh</a></li>
                    <li><a href="#">USA</a></li>
                    <li><a href="#">Canada</a></li>
                </ul>
            </div>

            <div class="footer-section contact">
                <h2>Address</h2>
                <p> India</p>
                <p>12048810787</p>
                <p>muslimnikah24@gmail.com</p>

                <div class="social-icons">
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">facebook</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Muslim Nikah | <a href="#">Home</a> | <a href="#">Cookies</a> | <a href="#">Help</a> | <a href="#">FAQs</a></p>
        </div>
    </footer>
</body>
</html>
