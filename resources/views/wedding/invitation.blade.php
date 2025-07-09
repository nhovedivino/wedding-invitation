@extends('layouts.wedding')

@section('title', 'Herlou & Nhove - You\'re Invited!')

@section('content')
<!-- Hero Section with Swipable Background -->
<section class="hero-section" style="position: relative; height: 100vh; overflow: hidden; display: flex; flex-direction: column; justify-content: flex-start; align-items: center; text-align: center; padding: 80px 20px 120px 20px;">
    <!-- Background Image Swiper (Only images change) -->
    <div class="swiper background-swiper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
        <div class="swiper-wrapper">
            <!-- Background Image 1 -->
            <div class="swiper-slide" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;"></div>
            <!-- Background Image 2 -->
            <div class="swiper-slide" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;"></div>
            <!-- Background Image 3 -->
            <div class="swiper-slide" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;"></div>
            <!-- Background Image 4 -->
            <div class="swiper-slide" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1522673607200-164d1b6ce486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;"></div>
        </div>
        
        <!-- Navigation arrows for background images -->
        <div class="swiper-button-next" style="color: #888; background: transparent; width: 60px; height: 60px; border-radius: 50%; margin-top: -30px; z-index: 10; right: 30px; border: none; box-shadow: none; transition: all 0.4s ease; font-size: 40px; font-weight: 900; text-shadow: 2px 2px 6px rgba(0,0,0,0.6), -1px -1px 2px rgba(255,255,255,0.3), inset 2px 2px 4px rgba(0,0,0,0.3), inset -2px -2px 4px rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; opacity: 0; transform: translateX(20px);"></div>
        <div class="swiper-button-prev" style="color: #888; background: transparent; width: 60px; height: 60px; border-radius: 50%; margin-top: -30px; z-index: 10; left: 30px; border: none; box-shadow: none; transition: all 0.4s ease; font-size: 40px; font-weight: 900; text-shadow: 2px 2px 6px rgba(0,0,0,0.6), -1px -1px 2px rgba(255,255,255,0.3), inset 2px 2px 4px rgba(0,0,0,0.3), inset -2px -2px 4px rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; opacity: 0; transform: translateX(-20px);"></div>
    </div>

    <!-- Static Content (Always visible) -->
    <div style="position: relative; z-index: 5; width: 100%; max-width: 1200px; margin-top: 50px;">
        <!-- Title -->
        <div data-animate="animate-fade-in-down" style="margin-bottom: 20px;">
            <h1 style="font-family: 'Dancing Script', cursive; font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 400; letter-spacing: 2px; color: white; margin: 0; line-height: 1.3;">
                Days Left Before We Say "I Do"
            </h1>
        </div>
        
        <!-- Countdown Display -->
        <div class="countdown-display" data-animate="animate-fade-in-up" style="background: rgba(255, 255, 255, 0.12); padding: 40px 60px; border-radius: 25px; border: 1px solid rgba(255, 255, 255, 0.15); margin-bottom: 60px; max-width: 800px; width: 100%; margin-left: auto; margin-right: auto;">
            <div id="countdown" style="display: flex; align-items: center; justify-content: center; gap: 40px; color: white; flex-wrap: wrap;">
                <div class="time-unit" style="text-align: center;">
                    <div id="days" class="time-number" style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; line-height: 1; margin-bottom: 10px;">00</div>
                    <div class="time-label" style="font-size: 1rem; letter-spacing: 3px; text-transform: uppercase; opacity: 0.85; font-weight: 300;">Days</div>
                </div>
                <div class="time-separator" style="display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 300; opacity: 0.6;">:</div>
                <div class="time-unit" style="text-align: center;">
                    <div id="hours" class="time-number" style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; line-height: 1; margin-bottom: 10px;">00</div>
                    <div class="time-label" style="font-size: 1rem; letter-spacing: 3px; text-transform: uppercase; opacity: 0.85; font-weight: 300;">Hours</div>
                </div>
                <div class="time-separator" style="display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 300; opacity: 0.6;">:</div>
                <div class="time-unit" style="text-align: center;">
                    <div id="minutes" class="time-number" style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; line-height: 1; margin-bottom: 10px;">00</div>
                    <div class="time-label" style="font-size: 1rem; letter-spacing: 3px; text-transform: uppercase; opacity: 0.85; font-weight: 300;">Minutes</div>
                </div>
                <div class="time-separator" style="display: flex; align-items: center; justify-content: center; font-size: 3rem; font-weight: 300; opacity: 0.6;">:</div>
                <div class="time-unit" style="text-align: center;">
                    <div id="seconds" class="time-number" style="font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 300; line-height: 1; margin-bottom: 10px; color: #90EE90;">00</div>
                    <div class="time-label" style="font-size: 1rem; letter-spacing: 3px; text-transform: uppercase; opacity: 0.85; font-weight: 300;">Seconds</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Gallery Section -->
<section style="padding: 100px 0; background: var(--cream); position: relative;">
    <div style="text-align: center; margin-bottom: 80px;">
        <h2 data-animate="animate-fade-in-up" style="font-family: 'Dancing Script', cursive; font-size: 3.5rem; color: var(--primary-color); margin-bottom: 20px;">
            Our Journey Together
        </h2>
        <p data-animate="animate-fade-in-up" style="font-size: 1.3rem; color: var(--text-light); max-width: 600px; margin: 0 auto;">
            A glimpse into our love story
        </p>
    </div>

    <!-- 3 Rows × 2 Columns Layout with Alternating Text and Images -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Row 1: Text Left, Image Right -->
        <div class="photo-gallery-row" data-animate="animate-fade-in-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 80px;">
            <div class="photo-gallery-text" style="padding: 40px;">
                <h3 style="font-family: 'Dancing Script', cursive; font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">Our First Date</h3>
                <p style="font-size: 1.2rem; color: var(--text-dark); line-height: 1.8; margin-bottom: 20px;">
                    It was a sunny afternoon when we first met at the cozy little café downtown. What started as a simple coffee date turned into hours of conversation and laughter.
                </p>
                <p style="font-size: 1rem; color: var(--text-light); font-style: italic;">
                    "From that moment, we knew something special was beginning..."
                </p>
            </div>
            <div class="photo-gallery-image hover-lift" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);">
                <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" 
                     alt="Our First Date" 
                     style="width: 100%; height: 400px; object-fit: cover;">
            </div>
        </div>

        <!-- Row 2: Image Left, Text Right -->
        <div class="photo-gallery-row" data-animate="animate-fade-in-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 80px;">
            <div class="photo-gallery-image hover-lift" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);">
                <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80" 
                     alt="The Proposal" 
                     style="width: 100%; height: 400px; object-fit: cover;">
            </div>
            <div class="photo-gallery-text" style="padding: 40px;">
                <h3 style="font-family: 'Dancing Script', cursive; font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">The Proposal</h3>
                <p style="font-size: 1.2rem; color: var(--text-dark); line-height: 1.8; margin-bottom: 20px;">
                    It was a peaceful evening by the sea. We were enjoying a romantic dinner together, watching the gentle waves under the twilight sky. The atmosphere was perfect and serene, but little did I know what was coming next.
                </p>
                <p style="font-size: 1rem; color: var(--text-light); font-style: italic;">
                    "Then came the surprise that changed everything - she said yes!"
                </p>
            </div>
        </div>

        <!-- Row 3: Text Left, Image Right -->
        <div class="photo-gallery-row" data-animate="animate-fade-in-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 50px;">
            <div class="photo-gallery-text" style="padding: 40px;">
                <h3 style="font-family: 'Dancing Script', cursive; font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;">Together Forever</h3>
                <p style="font-size: 1.2rem; color: var(--text-dark); line-height: 1.8; margin-bottom: 20px;">
                    Now we're ready to embark on the greatest adventure of all - marriage. Together we'll write the next chapter of our love story.
                </p>
                <p style="font-size: 1rem; color: var(--text-light); font-style: italic;">
                    "Two hearts, one love, forever and always..."
                </p>
            </div>
            <div class="photo-gallery-image hover-lift" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);">
                <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                     alt="Together Forever" 
                     style="width: 100%; height: 400px; object-fit: cover;">
            </div>
        </div>
    </div>

    <div class="divider">
        <i class="fas fa-heart animate-heartbeat"></i>
    </div>
</section>

@push('styles')


                <div data-animate="animate-slide-in-left" style="text-align: center; padding: 40px; background: rgba(255, 255, 255, 0.95); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px);">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--dusty-blue)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-church" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; color: var(--text-dark); margin-bottom: 15px;">Ceremony</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px;">
                        4:00 PM - 5:00 PM<br>
                        Exchange of vows and rings
                    </p>
                </div>

                <div data-animate="animate-fade-in-up" style="text-align: center; padding: 40px; background: rgba(255, 255, 255, 0.95); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px);">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--dusty-blue)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-camera" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; color: var(--text-dark); margin-bottom: 15px;">Photos</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px;">
                        5:00 PM - 6:00 PM<br>
                        Cocktail hour & photography
                    </p>
                </div>

                <div data-animate="animate-slide-in-right" style="text-align: center; padding: 40px; background: rgba(255, 255, 255, 0.95); border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px);">
                    <div style="width: 80px; height: 80px; margin: 0 auto 20px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--dusty-blue)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-glass-cheers" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h3 style="font-size: 1.8rem; color: var(--text-dark); margin-bottom: 15px;">Reception</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px;">
                        6:00 PM - 11:00 PM<br>
                        Dinner, dancing & celebration
                    </p>
                </div>
            </div>

            <div class="divider">
                <i class="fas fa-heart animate-heartbeat"></i>
            </div>

            <!-- Additional Information -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px; margin-top: 80px;">
                <div data-animate="animate-slide-in-left" style="background: rgba(255, 255, 255, 0.95); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px); position: relative; overflow: hidden;">
                    <!-- Background Image for Card -->
                    <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') center/cover; opacity: 0.1; border-radius: 50%;"></div>
                    <h3 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 25px; display: flex; align-items: center; position: relative; z-index: 1;">
                        <i class="fas fa-utensils" style="margin-right: 15px;"></i>
                        Dinner
                    </h3>
                    <p style="color: var(--text-dark); margin-bottom: 20px; font-size: 1.1rem; position: relative; z-index: 1;">
                        A three-course plated dinner will be served featuring seasonal ingredients and chef's specialties.
                    </p>
                    <p style="color: var(--text-light); font-style: italic; position: relative; z-index: 1;">
                        Please let us know about any dietary restrictions when you RSVP.
                    </p>
                </div>

                <div data-animate="animate-slide-in-right" style="background: rgba(255, 255, 255, 0.95); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px); position: relative; overflow: hidden;">
                    <!-- Background Image for Card -->
                    <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: url('https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') center/cover; opacity: 0.1; border-radius: 50%;"></div>
                    <h3 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 25px; display: flex; align-items: center; position: relative; z-index: 1;">
                        <i class="fas fa-gift" style="margin-right: 15px;"></i>
                        Gifts
                    </h3>
                    <p style="color: var(--text-dark); margin-bottom: 20px; font-size: 1.1rem; position: relative; z-index: 1;">
                        Your presence is the greatest gift of all. If you wish to honor us with a gift, we have registries at:
                    </p>
                    <p style="color: var(--text-light); position: relative; z-index: 1;">
                        • Williams Sonoma<br>
                        • Bed Bath & Beyond<br>
                        • Amazon
                    </p>
                </div>
            </div>
            </div>
        </section>

        <!-- RSVP Call to Action -->
        <section style="padding: 100px 0; text-align: center; background: linear-gradient(135deg, var(--primary-color), var(--dusty-blue)); position: relative; overflow: hidden;">
            <!-- Background Pattern -->
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1478146896981-b80fe463b330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') center/cover; opacity: 0.1;"></div>
            
            <div data-animate="animate-fade-in-up" style="position: relative; z-index: 1;">
                <h2 style="font-family: 'Dancing Script', cursive; font-size: 3.5rem; color: var(--white); margin-bottom: 30px;">
                    Can't Wait to Celebrate!
                </h2>
                <p style="font-size: 1.3rem; color: var(--white); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Please let us know if you'll be joining us for our special day. We're so excited to share this moment with you!
                </p>
                <a href="{{ route('wedding.rsvp') }}" class="btn" style="background: var(--white); color: var(--primary-color); font-size: 1.3rem; padding: 20px 40px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-heart" style="margin-right: 10px;"></i>
                    RSVP Today
                </a>
            </div>


@push('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Hero Section with Background Swiper */
    .hero-section {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .background-swiper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .background-swiper .swiper-slide {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: white;
    }

    .swiper-button-next,
    .swiper-button-prev {
        width: 60px !important;
        height: 60px !important;
        background: transparent !important;
        border-radius: 50% !important;
        color: #888 !important;
        border: none !important;
        box-shadow: none !important;
        opacity: 0 !important;
        transition: all 0.4s ease !important;
    }

    .swiper-button-next {
        transform: translateX(20px) !important;
    }

    .swiper-button-prev {
        transform: translateX(-20px) !important;
    }

    /* Show arrows on hero section hover */
    .hero-section:hover .swiper-button-next,
    .hero-section:hover .swiper-button-prev {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    /* Enhanced hover effects for individual arrows */
    .hero-section:hover .swiper-button-next:hover,
    .hero-section:hover .swiper-button-prev:hover {
        color: #555 !important;
        transform: scale(1.1) !important;
        text-shadow: 3px 3px 8px rgba(0,0,0,0.7), -2px -2px 3px rgba(255,255,255,0.4), inset 3px 3px 6px rgba(0,0,0,0.4), inset -3px -3px 6px rgba(255,255,255,0.3) !important;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 40px !important;
        font-weight: 900 !important;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.6), -1px -1px 2px rgba(255,255,255,0.3), inset 2px 2px 4px rgba(0,0,0,0.3), inset -2px -2px 4px rgba(255,255,255,0.2) !important;
    }

    /* Countdown Display Styles */
    .countdown-display {
        max-width: 800px;
        width: 100%;
    }
    
    /* Responsive countdown */
    @media (max-width: 1200px) {
        .countdown-display {
            padding: 30px 50px;
        }
        
        #countdown {
            gap: 30px;
        }
    }
    
    @media (max-width: 1024px) {
        .countdown-display {
            padding: 25px 40px;
        }
        
        #countdown {
            gap: 25px;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 15px !important;
        }
        
        .countdown-display {
            padding: 20px 25px;
        }
        
        #countdown {
            gap: 20px;
        }
        
        .time-separator {
            font-size: 2rem !important;
        }
        
        .time-unit {
            margin-bottom: 15px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            display: none !important;
        }
    }
    
    @media (max-width: 480px) {
        .countdown-display {
            padding: 20px 15px;
        }
        
        #countdown {
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .time-separator {
            display: none !important;
        }
        
        .time-number {
            font-size: 2rem !important;
        }
        
        .time-label {
            font-size: 0.9rem !important;
            letter-spacing: 2px !important;
        }
        
        .time-unit {
            flex: 0 0 45%;
            margin-bottom: 15px;
        }
    }

    /* Additional animations for this page */
    @keyframes sparkle {
        0%, 100% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }
        50% {
            transform: scale(1.2) rotate(180deg);
            opacity: 0.8;
        }
    }

    .sparkle {
        animation: sparkle 2s ease-in-out infinite;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Hover effects for info cards */
    [data-animate]:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    /* Photo Gallery Responsive Styles */
    @media (max-width: 968px) {
        /* Stack columns on tablets and mobile */
        .photo-gallery-row {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        
        .photo-gallery-row:nth-child(even) .photo-gallery-image {
            order: 1;
        }
        
        .photo-gallery-row:nth-child(even) .photo-gallery-text {
            order: 2;
        }
    }

    @media (max-width: 768px) {
        .photo-gallery-text {
            padding: 30px 20px !important;
        }
        
        .photo-gallery-text h3 {
            font-size: 2rem !important;
        }
        
        .photo-gallery-text p {
            font-size: 1.1rem !important;
        }
        
        .photo-gallery-image img {
            height: 300px !important;
        }
    }

    @media (max-width: 480px) {
        .photo-gallery-text {
            padding: 20px 15px !important;
        }
        
        .photo-gallery-text h3 {
            font-size: 1.8rem !important;
        }
        
        .photo-gallery-text p {
            font-size: 1rem !important;
        }
        
        .photo-gallery-image img {
            height: 250px !important;
        }
    }
</style>
@endpush

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // Initialize Background Swiper (only images change)
    const backgroundSwiper = new Swiper('.background-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 768px
            768: {
                // No special settings needed for larger screens
            }
        }
    });

    // Wedding countdown timer
    function updateCountdown() {
        const weddingDate = new Date('September 06, 2025 14:00:00').getTime();
        const now = new Date().getTime();
        const timeLeft = weddingDate - now;

        if (timeLeft > 0) {
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById('days').innerHTML = days.toString().padStart(2, '0');
            document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');
        } else {
            // Wedding day has arrived!
            document.getElementById('days').innerHTML = '00';
            document.getElementById('hours').innerHTML = '00';
            document.getElementById('minutes').innerHTML = '00';
            document.getElementById('seconds').innerHTML = '00';
        }
    }

    // Add staggered animation delays and start countdown
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('[data-animate]');
        elements.forEach((el, index) => {
            el.style.animationDelay = (index * 0.2) + 's';
        });
        
        // Start countdown
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });

    // Add parallax effect to floating elements
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelectorAll('.animate-float');
        const speed = 0.5;

        parallax.forEach(element => {
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
</script>
@endpush
@endsection
