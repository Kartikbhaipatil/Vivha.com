<?php
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>

    <section class="main">
        <div class="main-image">
            <img src="https://images.pexels.com/photos/12153966/pexels-photo-12153966.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Main Image">
        </div>
        <div class="main-text">
            <h1><strong>Welcome to Vivha.com</strong> </h1>
            <h3>- Your Trusted Matchmaking Partner!</h3>
           <p>
            Finding a life partner is one of the most important journeys in life, and Vivha.    
            com is here to make it seamless and meaningful. As a leading matrimonial platform,  
            we connect individuals based on compatibility, values, and cultural preferences,    
            ensuring a perfect match for a lifetime of happiness.
            At Vivha.com, we blend technology with tradition, offering a secure, user-friendly, 
            and personalized matchmaking experience. Whether you're searching for a partner based on religion, caste, profession, or personal interests, 
            our advanced matchmaking algorithms and verified profiles help you find your ideal match effortlessly.

            Join Vivha.com today and take the first step towards a beautiful and lasting relationship! 💍💖
           </p>
           <span>
            At Vivha.com, we believe that marriage is more than just an event—it's a lifelong journey built on trust, love, and shared dreams. 
            Our platform is designed to bring together like-minded individuals who are ready to embark on this beautiful journey with a partner who truly complements them. 
            With our secure and verified profiles, intelligent matchmaking algorithms, and personalized assistance, we ensure a smooth and successful search for your soulmate. Whether you're looking for a traditional or modern approach to marriage, Vivha.com is your trusted companion in finding a meaningful and lasting relationship. 🌸💑
           </span>
        </div>
    </section>
    <div class="search-container" id="search">
        <h1>Find Your Ideal Match</h1>
    <form class="search-form" action="search.php" method="GET">
        
        <label for="Mr_Ms"></label>
        <select name="Mr_Ms" id="Mr_Ms" required>
            <option value="">--- Select Mr/Ms ---</option>
            <option value="Groom">Groom</option>
            <option value="Bride">Bride</option>
        </select>

        <label for="min_age"></label>
        <input type="number" name="min_age" id="min_age" min="10" max="100" required placeholder="Min Age">

        <label for="max_age"></label>
        <input type="number" name="max_age" id="max_age" min="10" max="100" required placeholder="Max Age">

        <label for="state"></label>
        <select name="state" id="state" required>
            <option value="">--- Select State ---</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Bengal">Bengal</option>
            <option value="Rajasthan">Rajasthan</option>
        </select>

        <label for="sub_community"></label>
        <select name="sub_community" id="sub_community" required>
            <option value="">--- Select Sub-Community ---</option>
            <option value="Leva-Patil">Leva-Patil</option>
            <option value="Patel">Patel</option>
            <option value="Bengali">Bengali</option>
            <option value="Marwadi">Marwadi</option>
        </select>

        <button type="submit" class="search-btn">Search</button>
    </form>

    </div>
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
