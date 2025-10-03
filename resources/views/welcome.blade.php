<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Learning Platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@300;400;500;600;700&family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <style>
        :root {
            --primary-color: #1d3557;
            --secondary-color: #457b9d;
            --accent-color: #e63946;
            --light-color: #f1faee;
            --dark-color: #1d3557;
            --gold-color: #d4af37;
            --teal-color: #20c997;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        
        .arabic-text {
            font-family: 'Scheherazade New', serif;
            direction: rtl;
        }
        
        /* Navbar styling */
        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar-scrolled {
            background-color: rgba(29, 53, 87, 0.95) !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Decorative elements */
        .islamic-pattern {
            position: absolute;
            opacity: 0.05;
            z-index: 1;
            pointer-events: none;
        }
        
        .pattern-top-right {
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background-image: url("/assets/images/islamic-pattern.svg");
            transform: rotate(45deg);
        }
        
        .pattern-bottom-left {
            bottom: 0;
            left: 0;
            width: 250px;
            height: 250px;
            background-image: url("/assets/images/islamic-pattern.svg");
        }
        
        /* Hero section with enhanced styling */
        .hero-section {
            background: linear-gradient(rgba(29, 53, 87, 0.85), rgba(29, 53, 87, 0.95)), url('assets/images/header-bg.svg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%23ffffff' d='M50 0L100 50L50 100L0 50z'/%3E%3C/svg%3E");
            background-size: 50px;
            opacity: 0.03;
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .hero-subtitle {
            font-weight: 300;
            margin-bottom: 30px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .hero-quran-text {
            font-family: 'Scheherazade New', serif;
            font-size: 2rem;
            line-height: 1.5;
            margin-bottom: 30px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        /* Enhanced buttons */
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 12px 28px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .btn-primary:hover {
            background-color: #d62b39;
            border-color: #d62b39;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.3);
        }
        
        .btn-primary:hover::after {
            height: 100%;
        }
        
        .btn-outline-light {
            border-width: 2px;
            font-weight: 600;
            padding: 12px 28px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-outline-light::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            z-index: -1;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
        }
        
        .btn-outline-light:hover::after {
            height: 100%;
        }
        
        /* Enhanced section titles */
        .section-title {
            position: relative;
            margin-bottom: 60px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -15px;
            width: 40px;
            height: 4px;
            background-color: var(--gold-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 45px;
            bottom: -15px;
            width: 70px;
            height: 4px;
            background-color: var(--accent-color);
        }
        
        .section-title.text-center::before {
            left: 50%;
            margin-left: -55px;
        }
        
        .section-title.text-center::after {
            left: 50%;
            margin-left: -10px;
        }
        
        /* Enhanced lesson cards */
        .lesson-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 30px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .lesson-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-color), var(--gold-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        
        .lesson-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .lesson-card:hover::before {
            transform: scaleX(1);
        }
        
        .lesson-card .card-body {
            padding: 30px;
        }
        
        .lesson-card .card-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
            transition: color 0.3s ease;
        }
        
        .lesson-card:hover .card-title {
            color: var(--accent-color);
        }
        
        .lesson-card .card-text {
            color: #6c757d;
            margin-bottom: 20px;
        }
        
        .lesson-card .btn {
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .lesson-icon {
            font-size: 28px;
            margin-right: 10px;
            color: var(--accent-color);
            transition: transform 0.3s ease;
        }
        
        .lesson-card:hover .lesson-icon {
            transform: scale(1.2);
        }
        
        /* Enhanced importance section */
        .importance-section {
            background-color: var(--light-color);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .importance-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%231d3557' d='M50 0L100 50L50 100L0 50z'/%3E%3C/svg%3E");
            background-size: 50px;
            opacity: 0.03;
            z-index: 0;
        }
        
        .importance-card {
            background-color: white;
            border-radius: 15px;
            padding: 40px 30px;
            height: 100%;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .importance-card::before {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 70px;
            height: 70px;
            background-color: rgba(29, 53, 87, 0.03);
            border-radius: 50%;
            z-index: -1;
            transition: all 0.5s ease;
        }
        
        .importance-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .importance-card:hover::before {
            transform: scale(5);
        }
        
        .importance-icon {
            font-size: 45px;
            color: var(--accent-color);
            margin-bottom: 25px;
            transition: all 0.5s ease;
            display: inline-block;
        }
        
        .importance-card:hover .importance-icon {
            transform: scale(1.2) rotate(10deg);
            color: var(--gold-color);
        }
        
        .importance-title {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
            transition: color 0.3s ease;
        }
        
        .importance-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
        
        .importance-card:hover .importance-title {
            color: var(--accent-color);
        }
        
        .importance-card:hover .importance-title::after {
            width: 60px;
        }
        
        /* Enhanced footer */
        .footer {
            background: linear-gradient(rgba(29, 53, 87, 0.95), rgba(29, 53, 87, 0.98)), url('assets/images/footer-bg.svg');
            background-size: cover;
            background-position: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%23ffffff' d='M50 0L100 50L50 100L0 50z'/%3E%3C/svg%3E");
            background-size: 50px;
            opacity: 0.02;
            z-index: 0;
        }
        
        .footer-title {
            font-weight: 600;
            margin-bottom: 30px;
            color: white;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .footer-links {
            list-style: none;
            padding-left: 0;
            position: relative;
            z-index: 1;
        }
        
        .footer-links li {
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }
        
        .footer-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-links a:hover::after {
            width: 100%;
        }
        
        .footer-links li:hover {
            transform: translateX(5px);
        }
        
        .social-icons {
            list-style: none;
            padding-left: 0;
            display: flex;
        }
        
        .social-icons li {
            margin-right: 15px;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .social-icons a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }
        
        .social-icons a:hover {
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .social-icons a:hover::before {
            transform: scale(1);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Testimonial cards */
        .testimonial-card {
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-radius: 15px;
            overflow: hidden;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Call to action section */
        .cta-section {
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%23ffffff' d='M50 0L100 50L50 100L0 50z'/%3E%3C/svg%3E");
            background-size: 50px;
            opacity: 0.05;
            z-index: 0;
        }
        
        /* Animation classes */
        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .fade-in {
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        
        .fade-in.active {
            opacity: 1;
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .scale-in.active {
            opacity: 1;
            transform: scale(1);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-right.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-left.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Floating animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .float {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Pulse animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .pulse {
            animation: pulse 4s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-book-quran me-2 pulse"></i>
                Quran Learning Platform
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lessons">Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#importance">Importance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-3" href="#">Get Started</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="islamic-pattern pattern-top-right"></div>
        <div class="islamic-pattern pattern-bottom-left"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title display-4">Begin Your Journey of Quran Learning</h1>
                    <p class="hero-subtitle lead">Discover the beauty and wisdom of the Holy Quran through our interactive learning platform.</p>
                    <div class="hero-quran-text arabic-text" data-aos="fade-up" data-aos-delay="300">
                        وَلَقَدْ يَسَّرْنَا الْقُرْآنَ لِلذِّكْرِ فَهَلْ مِن مُّدَّكِرٍ
                    </div>
                    <p class="mb-4 fst-italic">"And We have certainly made the Qur'an easy for remembrance, so is there any who will remember?" - Surah Al-Qamar 54:17</p>
                    <div class="d-flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="500">
                        <a href="#lessons" class="btn btn-primary">Start Learning</a>
                        <a href="#about" class="btn btn-outline-light">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/quran-thumbnail.svg" alt="Quran Learning" class="img-fluid rounded shadow float">
                </div>
            </div>
        </div>
    </section>

    <!-- Lessons Section -->
    <section id="lessons" class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5" data-aos="fade-up">Our Lessons</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card lesson-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <i class="fas fa-book-open lesson-icon"></i>
                                Arabic Alphabet
                            </h3>
                            <p class="card-text">Learn the Arabic alphabet, their forms, and pronunciation with interactive exercises.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{route('alphabet') }}" class="btn btn-outline-primary">Start Lesson</a>

                                <span class="badge bg-primary">Beginner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card lesson-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <i class="fas fa-microphone-alt lesson-icon"></i>
                                Tajweed Rules
                            </h3>
                            <p class="card-text">Master the rules of Tajweed to recite the Quran with proper pronunciation and intonation.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-primary">Start Lesson</a>
                                <span class="badge bg-warning text-dark">Intermediate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card lesson-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <i class="fas fa-language lesson-icon"></i>
                                Quranic Arabic
                            </h3>
                            <p class="card-text">Understand the meaning of Quranic verses by learning essential Arabic vocabulary and grammar.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-outline-primary">Start Lesson</a>
                                <span class="badge bg-danger">Advanced</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn btn-primary">View All Lessons</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="islamic-pattern pattern-bottom-left"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/quran-study.jpg.svg" alt="Learning Quran" class="img-fluid rounded shadow pulse">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section-title">About Our Platform</h2>
                    <p class="lead mb-4">Our Quran learning platform is designed to make the journey of learning the Holy Quran accessible, engaging, and rewarding for everyone.</p>
                    <p class="mb-4">We combine traditional teaching methods with modern technology to create an immersive learning experience. Our courses are structured to accommodate learners of all levels, from beginners to advanced students.</p>
                    <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Expert teachers with proper Ijazah certification</span>
                    </div>
                    <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Interactive learning tools and exercises</span>
                    </div>
                    <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Progress tracking and personalized feedback</span>
                    </div>
                    <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <span>Community support and group learning sessions</span>
                    </div>
                    <a href="#" class="btn btn-primary" data-aos="fade-up" data-aos-delay="500">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Importance Section -->
    <section id="importance" class="importance-section">
        <div class="islamic-pattern pattern-top-right"></div>
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">The Importance of Learning Quran</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="importance-card">
                        <div class="importance-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="importance-title">Spiritual Connection</h3>
                        <p>Learning the Quran helps establish a direct connection with Allah, bringing peace and tranquility to the heart and soul.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="importance-card">
                        <div class="importance-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="importance-title">Guidance for Life</h3>
                        <p>The Quran provides comprehensive guidance for all aspects of life, helping believers navigate challenges with wisdom and faith.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="importance-card">
                        <div class="importance-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="importance-title">Community Building</h3>
                        <p>Learning and reciting the Quran together strengthens community bonds and creates a supportive environment for spiritual growth.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 testimonials-section">
        <div class="islamic-pattern pattern-bottom-left"></div>
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">What Our Students Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"This platform has transformed my Quran learning journey. The interactive lessons and supportive teachers have helped me improve my recitation significantly."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h5 class="mb-0">Ahmed Hassan</h5>
                                    <small class="text-muted">Student for 6 months</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"As a parent, I'm extremely satisfied with my children's progress. The platform makes learning fun and engaging, and the teachers are patient and knowledgeable."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h5 class="mb-0">Fatima Ali</h5>
                                    <small class="text-muted">Parent of two students</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="card-text">"I started as a complete beginner, not knowing any Arabic. Now I can read the Quran with proper Tajweed. The step-by-step approach and practice exercises are excellent."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h5 class="mb-0">Omar Khan</h5>
                                    <small class="text-muted">Student for 1 year</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white text-center cta-section">
        <div class="islamic-pattern pattern-center"></div>
        <div class="container">
            <h2 class="mb-4" data-aos="fade-up">Ready to Start Your Quran Learning Journey?</h2>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Join thousands of students who have enhanced their understanding and recitation of the Holy Quran.</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="btn btn-light btn-lg pulse">Register Now</a>
                <a href="#" class="btn btn-outline-light btn-lg ms-3">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="islamic-pattern pattern-footer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="footer-title">Quran Learning Platform</h3>
                    <p class="mb-4">Our mission is to make Quran learning accessible to everyone around the world through innovative and interactive teaching methods.</p>
                    <ul class="social-icons">
                        <li><a href="#" class="scale-in"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="scale-in"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="scale-in"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="scale-in"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#lessons">Courses</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="footer-title">Courses</h3>
                    <ul class="footer-links">
                        <li><a href="#">Arabic Alphabet</a></li>
                        <li><a href="#">Tajweed Rules</a></li>
                        <li><a href="#">Quranic Arabic</a></li>
                        <li><a href="#">Memorization</a></li>
                        <li><a href="#">Tafsir</a></li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Islamic Center St, City, Country</li>
                        <li><i class="fas fa-phone me-2"></i> +1 234 567 8901</li>
                        <li><i class="fas fa-envelope me-2"></i> info@quranlearning.com</li>
                    </ul>
                    <div class="mt-4">
                        <h5 class="text-white mb-3">Subscribe to Our Newsletter</h5>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <button class="btn btn-accent pulse" type="button" style="background-color: var(--accent-color); color: white;">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center copyright" data-aos="fade-up" data-aos-delay="500">
                <p>&copy; 2023 Quran Learning Platform. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70, // Adjust for fixed navbar
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
</body>
</html>