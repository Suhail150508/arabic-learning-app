<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arabic Alphabet for Beginners - Quran Learning Platform</title>
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
            background: linear-gradient(rgba(29, 53, 87, 0.85), rgba(29, 53, 87, 0.95)), url('assets/images/arabic-alphabet-bg.svg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
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
        
        .btn-primary:hover {
            background-color: #d62b39;
            border-color: #d62b39;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.3);
        }
        
        /* Enhanced section titles */
        .section-title {
            position: relative;
            margin-bottom: 60px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -15px;
            height: 2px;
            width: 80px;
            margin: 0 auto;
            background-color: var(--accent-color);
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -25px;
            height: 2px;
            width: 40px;
            margin: 0 auto;
            background-color: var(--accent-color);
        }
        
        /* Alphabet card styling */
        .alphabet-card {
            background: url('assets/images/alphabet-card-bg.svg');
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 30px;
            border-top: 4px solid var(--primary-color);
            position: relative;
        }
        
        .alphabet-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-top-color: var(--accent-color);
        }
        
        .alphabet-card .card-body {
            padding: 30px;
        }
        
        .alphabet-letter {
            font-family: 'Scheherazade New', serif;
            font-size: 5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
            line-height: 1;
        }
        
        .alphabet-letter-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 15px;
        }
        
        .alphabet-pronunciation {
            font-size: 1.1rem;
            color: var(--dark-color);
            text-align: center;
            margin-bottom: 20px;
        }
        
        .alphabet-example {
            background-color: var(--light-color);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }
        
        .alphabet-example-word {
            font-family: 'Scheherazade New', serif;
            font-size: 2rem;
            text-align: center;
            direction: rtl;
            margin-bottom: 10px;
        }
        
        .alphabet-example-translation {
            text-align: center;
            font-style: italic;
            color: var(--secondary-color);
        }
        
        /* Audio button */
        .audio-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            margin: 0 auto;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .audio-btn:hover {
            background-color: var(--accent-color);
            transform: scale(1.1);
        }
        
        /* Forms styling */
        .letter-forms {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        
        .letter-form {
            text-align: center;
        }
        
        .form-label {
            font-size: 0.8rem;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }
        
        .form-arabic {
            font-family: 'Scheherazade New', serif;
            font-size: 2rem;
            color: var(--primary-color);
        }
        
        /* Progress tracker */
        .progress-container {
            margin: 50px 0;
        }
        
        .progress-title {
            margin-bottom: 20px;
            font-weight: 600;
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
        
        .float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
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
        
        /* Footer styling */
        .footer {
            background: linear-gradient(rgba(29, 53, 87, 0.95), rgba(29, 53, 87, 0.98)), url('assets/images/footer-bg.svg');
            background-size: cover;
            background-position: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
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
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="fas fa-book-quran me-2 pulse"></i>
                <span>Quran Learning</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/alphabet">Arabic Alphabet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lessons">Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
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
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="hero-content">
                        <h1 class="hero-title" data-aos="fade-right">Arabic Alphabet for Beginners</h1>
                        <p class="hero-subtitle" data-aos="fade-right" data-aos-delay="100">Master the foundation of Quranic recitation by learning the Arabic alphabet with proper pronunciation.</p>
                        <div class="hero-quran-text arabic-text" data-aos="fade-up" data-aos-delay="200">
                            اقْرَأْ بِاسْمِ رَبِّكَ الَّذِي خَلَقَ
                        </div>
                        <p class="mb-4" data-aos="fade-up" data-aos-delay="300">"Read in the name of your Lord who created." - [Quran 96:1]</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="assets/images/quran-thumbnail.svg" alt="Arabic Alphabet" class="img-fluid float" data-aos="fade-left" data-aos-delay="200">
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title" data-aos="fade-up">Getting Started with Arabic Letters</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">The Arabic alphabet consists of 28 letters. Unlike English, Arabic is written and read from right to left. Each letter can have up to four different forms depending on its position in a word.</p>
                    <div class="text-center my-5" data-aos="fade-up" data-aos-delay="150">
                        <img src="assets/images/arabic-letters.svg" alt="Arabic Letters Overview" class="img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px;">
                                    <i class="fas fa-volume-up"></i>
                                </div>
                                <span class="ms-2">Listen carefully</span>
                            </div>
                        </div>
                        <div class="me-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px;">
                                    <i class="fas fa-pen"></i>
                                </div>
                                <span class="ms-2">Practice writing</span>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 40px; height: 40px;">
                                    <i class="fas fa-repeat"></i>
                                </div>
                                <span class="ms-2">Repeat regularly</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Progress Tracker -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="progress-container" data-aos="fade-up">
                        <h3 class="progress-title">Your Learning Progress</h3>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <small>0 of 28 letters</small>
                            <small>0%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alphabet Cards Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">The Arabic Alphabet</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Click on each letter to hear its pronunciation and learn its different forms.</p>
            
            <div class="row">
                <!-- Alif -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="alphabet-card">
                        <div class="card-body">
                            <div class="alphabet-letter">ا</div>
                            <h3 class="alphabet-letter-name">Alif</h3>
                            {{-- <p class="alphabet-pronunciation">Pronunciation: /a/ as in "father"</p> --}}
                            <div class="audio-btn">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div class="letter-forms">
                                <div class="letter-form">
                                    <div class="form-label">Initial</div>
                                    <div class="form-arabic">ا</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Medial</div>
                                    <div class="form-arabic">ـا</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Final</div>
                                    <div class="form-arabic">ـا</div>
                                </div>
                            </div>
                            <div class="alphabet-example">
                                <div class="alphabet-example-word">أَب</div>
                                <div class="alphabet-example-translation">Father</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- <!-- Ba -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="alphabet-card">
                        <div class="card-body">
                            <div class="alphabet-letter">ب</div>
                            <h3 class="alphabet-letter-name">Ba</h3>
                            <p class="alphabet-pronunciation">Pronunciation: /b/ as in "boy"</p>
                            <div class="audio-btn">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div class="letter-forms">
                                <div class="letter-form">
                                    <div class="form-label">Initial</div>
                                    <div class="form-arabic">بـ</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Medial</div>
                                    <div class="form-arabic">ـبـ</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Final</div>
                                    <div class="form-arabic">ـب</div>
                                </div>
                            </div>
                            <div class="alphabet-example">
                                <div class="alphabet-example-word">بَاب</div>
                                <div class="alphabet-example-translation">Door</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Ta -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="alphabet-card">
                        <div class="card-body">
                            <div class="alphabet-letter">ت</div>
                            <h3 class="alphabet-letter-name">Ta</h3>
                            <p class="alphabet-pronunciation">Pronunciation: /t/ as in "table"</p>
                            <div class="audio-btn">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <div class="letter-forms">
                                <div class="letter-form">
                                    <div class="form-label">Initial</div>
                                    <div class="form-arabic">تـ</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Medial</div>
                                    <div class="form-arabic">ـتـ</div>
                                </div>
                                <div class="letter-form">
                                    <div class="form-label">Final</div>
                                    <div class="form-arabic">ـت</div>
                                </div>
                            </div>
                            <div class="alphabet-example">
                                <div class="alphabet-example-word">تَمْر</div>
                                <div class="alphabet-example-translation">Dates (fruit)</div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                
                <!-- More letters would be added here -->
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-primary btn-lg">View All 28 Letters</a>
            </div>
        </div>
    </section>

    <!-- Learning Tips Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="section-title">Tips for Learning Arabic Letters</h2>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="min-width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>Practice writing each letter multiple times to build muscle memory</div>
                        </li>
                        <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="min-width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>Focus on the correct pronunciation from the beginning</div>
                        </li>
                        <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="min-width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>Learn similar-looking letters together to understand their differences</div>
                        </li>
                        <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="min-width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>Use flashcards to test your recognition of letters</div>
                        </li>
                        <li class="d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="min-width: 40px; height: 40px;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>Practice connecting letters to form words as soon as possible</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/quran-thumbnail.svg" alt="Learning Tips" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Practice Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">Interactive Practice</h2>
            <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">Test your knowledge with these interactive exercises.</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Letter Recognition</h4>
                            <p>What is the name of this letter?</p>
                            <div class="text-center mb-4">
                                <div class="alphabet-letter">ج</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-3 mb-3">
                                    <button class="btn btn-outline-primary w-100">Ba</button>
                                </div>
                                <div class="col-6 col-md-3 mb-3">
                                    <button class="btn btn-outline-primary w-100">Jim</button>
                                </div>
                                <div class="col-6 col-md-3 mb-3">
                                    <button class="btn btn-outline-primary w-100">Dal</button>
                                </div>
                                <div class="col-6 col-md-3 mb-3">
                                    <button class="btn btn-outline-primary w-100">Ha</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
                        <a href="#" class="btn btn-primary">More Practice Exercises</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Steps Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="islamic-pattern pattern-center"></div>
        <div class="container">
            <h2 class="mb-4" data-aos="fade-up">Ready to Continue Your Learning Journey?</h2>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Once you've mastered the alphabet, move on to our comprehensive Tajweed and Quran recitation courses.</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="btn btn-light btn-lg pulse">Explore Courses</a>
                <a href="#" class="btn btn-outline-light btn-lg ms-3">Contact a Teacher</a>
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
                        <li><a href="/">Home</a></li>
                        <li><a href="/alphabet">Arabic Alphabet</a></li>
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
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Progress tracker simulation
        // In a real application, this would be connected to user progress data
        let lettersSeen = 0;
        const totalLetters = 28;
        
        document.querySelectorAll('.alphabet-card').forEach(card => {
            card.addEventListener('click', function() {
                // Simulate progress update when a letter card is clicked
                if (!this.classList.contains('viewed')) {
                    this.classList.add('viewed');
                    lettersSeen++;
                    updateProgress();
                }
            });
        });
        
        function updateProgress() {
            const percentage = Math.round((lettersSeen / totalLetters) * 100);
            const progressBar = document.querySelector('.progress-bar');
            const progressText = document.querySelector('.progress-container small:last-child');
            const progressCount = document.querySelector('.progress-container small:first-child');
            
            progressBar.style.width = percentage + '%';
            progressBar.setAttribute('aria-valuenow', percentage);
            progressText.textContent = percentage + '%';
            progressCount.textContent = lettersSeen + ' of ' + totalLetters + ' letters';
        }
        
        // Audio button functionality
        // In a real application, this would play actual audio files
        document.querySelectorAll('.audio-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Simulate audio playing with animation
                this.classList.add('playing');
                setTimeout(() => {
                    this.classList.remove('playing');
                }, 1000);
                
                // Here you would actually play an audio file
                console.log('Playing audio for letter');
            });
        });
    </script>
</body>
</html>