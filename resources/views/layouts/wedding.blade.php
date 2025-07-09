<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Herlou & Nhove - Wedding Invitation')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4285f4;
            --secondary-color: #e3f2fd;
            --accent-color: #1565c0;
            --light-blue: #64b5f6;
            --deep-blue: #0d47a1;
            --sky-blue: #87ceeb;
            --navy-blue: #1e3a8a;
            --text-dark: #1a202c;
            --text-light: #718096;
            --white: #ffffff;
            --background: #f7fafc;
            --cream: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: var(--background);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        .nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: transparent;
            z-index: 1000;
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            font-family: 'Dancing Script', cursive;
            font-size: 2rem;
            font-weight: 600;
            color: var(--primary-color);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes heartbeat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }

        .animate-slide-in-left {
            animation: slideInLeft 1s ease-out;
        }

        .animate-slide-in-right {
            animation: slideInRight 1s ease-out;
        }

        .animate-heartbeat {
            animation: heartbeat 2s ease-in-out infinite;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* Additional dusty blue theme styles */
        .dusty-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--dusty-blue), var(--light-dusty));
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .image-overlay {
            position: relative;
            overflow: hidden;
        }

        .image-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--primary-color), transparent, var(--dusty-blue));
            opacity: 0.1;
            z-index: 1;
        }

        .decorative-border {
            border: 2px solid;
            border-image: linear-gradient(45deg, var(--primary-color), var(--dusty-blue), var(--light-dusty)) 1;
        }

        /* Enhanced animations */
        @keyframes dustyFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-15px) rotate(5deg);
            }
            66% {
                transform: translateY(-5px) rotate(-3deg);
            }
        }

        .dusty-float {
            animation: dustyFloat 6s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(139, 163, 199, 0.3), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s ease-in-out infinite;
        }

        /* Dusty blue patterns */
        .pattern-dots {
            background-image: radial-gradient(circle, var(--primary-color) 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.1;
        }

        .pattern-waves {
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                var(--light-dusty) 10px,
                var(--light-dusty) 20px
            );
            opacity: 0.05;
        }

        /* Enhanced hover effects */
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-lift:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(139, 163, 199, 0.3);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--light-blue));
            color: var(--white);
            box-shadow: 0 4px 15px rgba(66, 133, 244, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(66, 133, 244, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 1rem;
            font-family: 'Nunito', sans-serif;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(66, 133, 244, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        /* Decorative Elements */
        .divider {
            text-align: center;
            margin: 50px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--primary-color), transparent);
        }

        .divider i {
            background: var(--background);
            color: var(--primary-color);
            font-size: 2rem;
            padding: 0 20px;
        }

        /* Background Decorations */
        .bg-decoration {
            position: fixed;
            pointer-events: none;
            z-index: -1;
        }

        .bg-decoration.heart1 {
            top: 20%;
            right: 10%;
            font-size: 2rem;
            color: rgba(66, 133, 244, 0.1);
            animation: float 4s ease-in-out infinite;
        }

        .bg-decoration.heart2 {
            bottom: 30%;
            left: 5%;
            font-size: 1.5rem;
            color: rgba(66, 133, 244, 0.1);
            animation: float 5s ease-in-out infinite reverse;
        }

        .bg-decoration.ring1 {
            top: 60%;
            right: 5%;
            font-size: 1.8rem;
            color: rgba(66, 133, 244, 0.1);
            animation: float 3.5s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .nav-brand {
                font-size: 1.5rem;
            }

            .btn {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }

        /* Success/Error Messages */
        .alert {
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            animation: slideInDown 0.5s ease-out;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="container">
            <div class="nav-content">
                <a href="{{ route('wedding.invitation') }}" class="nav-brand">Herlou & Nhove</a>
                <ul class="nav-links">
                    <li><a href="{{ route('wedding.invitation') }}">Invitation</a></li>
                    <li><a href="{{ route('wedding.rsvp') }}">RSVP</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background Decorations -->
    <div class="bg-decoration heart1">
        <i class="fas fa-heart"></i>
    </div>
    <div class="bg-decoration heart2">
        <i class="fas fa-heart"></i>
    </div>
    <div class="bg-decoration ring1">
        <i class="fas fa-ring"></i>
    </div>

    <!-- Additional Decorative Elements -->
    <div style="position: fixed; top: 15%; right: 3%; font-size: 1.2rem; color: rgba(139, 163, 199, 0.15); z-index: -1;" class="dusty-float">
        <i class="fas fa-dove"></i>
    </div>
    <div style="position: fixed; bottom: 40%; left: 2%; font-size: 1.5rem; color: rgba(139, 163, 199, 0.15); z-index: -1;" class="dusty-float" style="animation-delay: 2s;">
        <i class="fas fa-leaf"></i>
    </div>
    <div style="position: fixed; top: 70%; right: 8%; font-size: 1rem; color: rgba(139, 163, 199, 0.15); z-index: -1;" class="dusty-float" style="animation-delay: 4s;">
        <i class="fas fa-star"></i>
    </div>

    <!-- Main Content -->
    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    <script>
        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(255, 255, 255, 0.1)';
                nav.style.backdropFilter = 'blur(10px)';
                nav.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
            } else {
                nav.style.background = 'transparent';
                nav.style.backdropFilter = 'none';
                nav.style.boxShadow = 'none';
            }
        });

        // Intersection Observer for animations
        const observeElements = document.querySelectorAll('[data-animate]');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animationClass = entry.target.getAttribute('data-animate');
                    entry.target.classList.add(animationClass);
                }
            });
        }, { threshold: 0.1 });

        observeElements.forEach(el => observer.observe(el));
    </script>
    @stack('scripts')
</body>
</html>
