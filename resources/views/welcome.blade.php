<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genzura</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }
        
        body {
            background-color: #ffffff;
            color: #000000;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 24px;
            text-decoration: none;
            color: #000000;
        }
                
        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }
        
        .nav-link {
            text-decoration: none;
            color: #000000;
            font-weight: 500;
            position: relative;
            padding: 8px 0;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #333333;
        }
        
        .nav-link.active {
            font-weight: 600;
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #000000;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #000000;
        }
        
        /* Hero Section */
        .hero {
            padding: 100px 0;
            text-align: center;
            background-color: #f8f8f8;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 40px;
            color: #333333;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #000000;
            color: #ffffff;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
            border: 2px solid #000000;
        }
        
        .cta-button:hover {
            background-color: #ffffff;
            color: #000000;
        }
        
        
        .card-icon {
            width: 60px;
            height: 60px;
            background-color: #000000;
            color: #ffffff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .card-title {
            font-size: 22px;
            margin-bottom: 15px;
        }
        
        .card-desc {
            color: #333333;
            margin-bottom: 20px;
        }
        
        .card-link {
            color: #000000;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s ease;
        }
        
        .card-link:hover {
            gap: 12px;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background-color: #f8f8f8;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .about-text {
            font-size: 18px;
            margin-bottom: 30px;
            color: #333333;
            line-height: 1.8;
        }
        
        .features-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }
        
        .feature-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }
        
        .feature-icon {
            min-width: 24px;
            height: 24px;
            background-color: #000000;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 3px;
        }
        
        .feature-text {
            color: #333333;
        }
        
        /* Footer */
        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 60px 0 30px;
            margin-top: auto;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffffff;
        }
        
        .footer-logo .logo-icon {
            background-color: #ffffff;
            color: #000000;
        }
        
        .footer-column h3 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #cccccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #ffffff;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333333;
            color: #999999;
            font-size: 14px;
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: #ffffff;
                flex-direction: column;
                padding: 20px;
                gap: 20px;
                border-bottom: 1px solid #e0e0e0;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 999;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
            }
        }
        
        /* Interactive Elements */
        .stat-badge {
            display: inline-block;
            background-color: #000000;
            color: #ffffff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-left: 10px;
        }
        
        .project-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #000000;
        }
        
        .status-indicator.active {
            background-color: #000000;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="nav-container">
                <a href="#" class="logo">
                    <span><strong>Genzura</strong></span>
                </a>
                
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                
                <div class="nav-links" id="navLinks">
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#login" class="nav-link">Login</a>
                    <a href="#register" class="nav-link">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1><strong>Genzura<strong></h1>
            <p>Modern construction management system designed to simplify, organize, and digitize the construction process for homeowners and contractors.</p>
            <a href="#dashboard" class="cta-button">Explore Dashboard</a>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">About Genzura</h2>
                
                <p class="about-text">
                    Genzura is a modern construction management system designed to simplify, organize, and digitize the construction process. The application helps users plan projects, track materials, monitor daily progress, and control budgets in real time.
                </p>
                
                <p class="about-text">
                    Unlike traditional construction management methods that rely on notebooks, WhatsApp messages, or spreadsheets, BuildSmart RW provides a centralized, interactive, and user-friendly platform. The system ensures transparency, reduces waste, and helps both contractors and homeowners make informed decisions.
                </p>
                
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">✓</div>
                        <div class="feature-text">Centralized project management</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✓</div>
                        <div class="feature-text">Real-time progress tracking</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✓</div>
                        <div class="feature-text">Material inventory management</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✓</div>
                        <div class="feature-text">Budget control and forecasting</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <span><strong>Genzura</strong></span>
                    </div>
                    <p>Construction Management System designed for Rwanda's construction industry. Project Genzura.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Target Users</h3>
                    <ul class="footer-links">
                        <li>Homeowners</li>
                        <li>Construction Contractors</li>
                        <li>Site Supervisors</li>
                        <li>Engineers</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 BuildSmart RW (Genzura). All rights reserved.</p>
                <p>Modern Construction Management System</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');
        
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Close mobile menu if open
                    navLinks.classList.remove('active');
                    mobileMenuBtn.textContent = '☰';
                    
                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });
        
        // Update active nav link on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let currentSection = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (window.scrollY >= sectionTop - 100) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSection}`) {
                    link.classList.add('active');
                }
            });
        });
        
        // Animate counters
        const animateCounters = () => {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                let current = 0;
                const increment = target / 100;
                
                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.round(current);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };
                
                // Start animation when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(counter);
            });
        };
        
        // Initialize counter animation
        document.addEventListener('DOMContentLoaded', animateCounters);
    </script>
</body>
</html>