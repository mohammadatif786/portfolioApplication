<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advanced Portfolio Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Hero Section */
        #hero {
            height: 100vh;
            background-image: url('http://portfolioapplication.test/frontened/img/bgPort.jpg');
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        #hero h1 {
            font-size: 4rem;
            animation: fadeInDown 1.5s ease-in-out;
        }

        #hero .btn {
            margin-top: 20px;
            padding: 15px 30px;
            animation: fadeInUp 2s ease-in-out;
        }

        /* Keyframe Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scroll-to-top button */
        #scrollTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 50%;
            z-index: 1000;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Advanced Features Section */
        .features-card {
            transition: transform 0.5s, box-shadow 0.5s;
        }

        .features-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Statistics Section */
        .stats-card {
            text-align: center;
            margin-bottom: 20px;
        }

        .stats-card i {
            font-size: 3rem;
            color: #007bff;
        }

        .stats-card h3 {
            font-size: 2rem;
            margin: 10px 0;
        }

        /* FAQ Section */
        .accordion-button:after {
            font-size: 1.2rem;
            color: #007bff;
        }

        /* Pricing Section */
        .pricing-card {
            background: white;
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 20px;
            overflow: hidden;
            margin: 20px;
        }

        .pricing-card:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .pricing-highlight {
            border: 2px solid #007bff;
            background-color: #f1faff;
            padding: 30px;
        }

        /* Newsletter Section */
        .newsletter {
            background-color: #f8f9fa;
            padding: 40px 20px;
            border-radius: 10px;
        }

        /* Partners Section */
        .partners img {
            width: 120px;
            margin: 20px;
            filter: grayscale(100%);
            transition: filter 0.3s;
        }

        .partners img:hover {
            filter: none;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        footer .social-icons a {
            color: white;
            font-size: 20px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PortfolioApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <h1>Build Your Professional Portfolio</h1>
            <p>Create a beautiful and powerful portfolio with ease</p>
            <a href="#features" class="btn btn-primary">Get Started</a>
            <a href="#pricing" class="btn btn-outline-light">See Pricing</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card features-card p-4">
                        <div class="card-body">
                            <i class="fas fa-paint-brush fa-2x mb-3"></i>
                            <h5 class="card-title">Creative Design</h5>
                            <p class="card-text">Fully customizable design options for your portfolio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card features-card p-4">
                        <div class="card-body">
                            <i class="fas fa-mobile-alt fa-2x mb-3"></i>
                            <h5 class="card-title">Responsive</h5>
                            <p class="card-text">Your portfolio will look stunning on any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card features-card p-4">
                        <div class="card-body">
                            <i class="fas fa-lock fa-2x mb-3"></i>
                            <h5 class="card-title">Secure</h5>
                            <p class="card-text">Keep your data and portfolio secure with top-notch encryption.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="stats" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">Our Achievements</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-user-friends"></i>
                        <h3>100K+</h3>
                        <p>Happy Users</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-briefcase"></i>
                        <h3>50K+</h3>
                        <p>Portfolios Created</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-code"></i>
                        <h3>500K+</h3>
                        <p>Lines of Code</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <i class="fas fa-award"></i>
                        <h3>100+</h3>
                        <p>Awards Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Pricing Plans</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-card p-4">
                        <h3>Basic</h3>
                        <p class="price">$9/month</p>
                        <ul class="list-unstyled">
                            <li>5 Projects</li>
                            <li>Basic Support</li>
                            <li>Single User</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card pricing-highlight p-4">
                        <h3>Pro</h3>
                        <p class="price">$29/month</p>
                        <ul class="list-unstyled">
                            <li>Unlimited Projects</li>
                            <li>Priority Support</li>
                            <li>5 Users</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-card p-4">
                        <h3>Enterprise</h3>
                        <p class="price">$99/month</p>
                        <ul class="list-unstyled">
                            <li>Custom Solutions</li>
                            <li>Dedicated Support</li>
                            <li>Unlimited Users</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription Section -->
    <section id="newsletter" class="newsletter text-center py-5">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter for the latest updates and features.</p>
            <form class="row justify-content-center">
                <div class="col-md-6">
                    <input type="email" class="form-control mb-3" placeholder="Enter your email">
                    <button class="btn btn-primary w-100">Subscribe</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="text-center py-5 bg-light">
        <div class="container">
            <h2>Our Partners</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="partner1-logo.png" alt="Partner 1">
                <img src="partner2-logo.png" alt="Partner 2">
                <img src="partner3-logo.png" alt="Partner 3">
                <img src="partner4-logo.png" alt="Partner 4">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 text-center">
        <div class="container">
            <h2 class="mb-4">What Our Users Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-card p-4">
                            <p>"This platform made building my portfolio so simple!"</p>
                            <h5>— John Doe</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card p-4">
                            <p>"Easy to use and highly customizable."</p>
                            <h5>— Jane Smith</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card p-4">
                            <p>"Helped me land my dream job!"</p>
                            <h5>— Alice Johnson</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4 text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is PortfolioApp?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            PortfolioApp is a platform where you can build and showcase your professional portfolio.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is my data secure?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we prioritize security to ensure your data is safe and protected.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I start using the platform?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Simply sign up, choose a plan, and start creating your portfolio right away!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; 2024 PortfolioApp. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll-to-top Button -->
    <button id="scrollTopBtn" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scroll-to-top button functionality
        window.onscroll = function() { showScrollTopBtn(); };

        function showScrollTopBtn() {
            let scrollTopBtn = document.getElementById("scrollTopBtn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>
