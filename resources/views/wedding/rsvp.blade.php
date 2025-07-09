@extends('layouts.wedding')

@section('title', 'RSVP - Herlou & Nhove')

@section('content')
<div class="rsvp-page" style="background: linear-gradient(135deg, var(--cream), var(--secondary-color)); min-height: 100vh; position: relative;">
    <!-- Background Image -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover; opacity: 0.05; z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <section style="padding: 50px 0 100px;">
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="text-align: center; margin-bottom: 60px;">
                    <!-- Decorative Image -->
                    <div style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 30px; overflow: hidden; border: 3px solid var(--primary-color); box-shadow: 0 10px 30px rgba(139, 163, 199, 0.3);">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" 
                             alt="Wedding Rings" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    
                    <h1 data-animate="animate-fade-in-down" style="font-family: 'Dancing Script', cursive; font-size: 4rem; color: var(--primary-color); margin-bottom: 20px;">
                        RSVP
                    </h1>
                    <p data-animate="animate-fade-in-up" style="font-size: 1.3rem; color: var(--text-light); max-width: 600px; margin: 0 auto;">
                        We can't wait to celebrate with you! Please let us know if you'll be joining us for our special day.
                    </p>
                </div>

                <div class="divider" data-animate="animate-fade-in-up">
                    <i class="fas fa-heart animate-heartbeat"></i>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle" style="margin-right: 10px;"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Messages -->
                @if($errors->any())
                    <div class="alert alert-error">
                        <h4 style="margin-bottom: 10px;">
                            <i class="fas fa-exclamation-circle" style="margin-right: 10px;"></i>
                            Please correct the following errors:
                        </h4>
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- RSVP Form -->
                <div data-animate="animate-fade-in-up" style="background: rgba(255, 255, 255, 0.95); padding: 50px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(10px); position: relative; overflow: hidden;">
                    <!-- Decorative background element -->
                    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: url('https://images.unsplash.com/photo-1465495976277-4387d4b0e4a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80') center/cover; opacity: 0.1; border-radius: 50%; transform: rotate(15deg);"></div>
                    
                    <form method="POST" action="{{ route('wedding.rsvp.store') }}" id="rsvpForm" style="position: relative; z-index: 1;">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="form-label">
                                <i class="fas fa-user" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Full Name *
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="form-control" 
                                   value="{{ old('name') }}" 
                                   required 
                                   placeholder="Your full name">
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-calendar-check" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Will you be attending? *
                            </label>
                            <div style="display: flex; gap: 30px; margin-top: 15px;">
                                <label style="display: flex; align-items: center; cursor: pointer; font-size: 1.1rem;">
                                    <input type="radio" 
                                           name="attending" 
                                           value="1" 
                                           {{ old('attending') == '1' ? 'checked' : '' }}
                                           style="margin-right: 10px; transform: scale(1.2);">
                                    <span style="color: var(--primary-color); font-weight: 600;">
                                        <i class="fas fa-heart" style="margin-right: 5px;"></i>
                                        Yes, I'll be there!
                                    </span>
                                </label>
                                <label style="display: flex; align-items: center; cursor: pointer; font-size: 1.1rem;">
                                    <input type="radio" 
                                           name="attending" 
                                           value="0" 
                                           {{ old('attending') == '0' ? 'checked' : '' }}
                                           style="margin-right: 10px; transform: scale(1.2);">
                                    <span style="color: var(--text-light);">
                                        <i class="fas fa-times" style="margin-right: 5px;"></i>
                                        Sorry, I can't make it
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="relationship" class="form-label">
                                <i class="fas fa-heart" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Relationship to Couple *
                            </label>
                            <select id="relationship" name="relationship" class="form-control" required>
                                <option value="">Select your relationship</option>
                                <option value="Family" {{ old('relationship') == 'Family' ? 'selected' : '' }}>Family</option>
                                <option value="Friend" {{ old('relationship') == 'Friend' ? 'selected' : '' }}>Friend</option>
                                <option value="Colleague" {{ old('relationship') == 'Colleague' ? 'selected' : '' }}>Colleague</option>
                                <option value="Classmate" {{ old('relationship') == 'Classmate' ? 'selected' : '' }}>Classmate</option>
                                <option value="Neighbor" {{ old('relationship') == 'Neighbor' ? 'selected' : '' }}>Neighbor</option>
                                <option value="Other" {{ old('relationship') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">
                                <i class="fas fa-comment" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Special Message for the Couple
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      class="form-control" 
                                      rows="4" 
                                      placeholder="Share your wishes, memories, or any special message for Herlou & Nhove...">{{ old('message') }}</textarea>
                        </div>

                        <div style="text-align: center; margin-top: 40px;">
                            <button type="submit" class="btn btn-primary" style="font-size: 1.3rem; padding: 20px 50px;">
                                <i class="fas fa-paper-plane" style="margin-right: 10px;"></i>
                                Send RSVP
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Additional Information -->
                <div data-animate="animate-fade-in-up" style="margin-top: 60px; text-align: center; background: rgba(255, 255, 255, 0.95); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border: 2px solid var(--light-dusty); backdrop-filter: blur(5px); position: relative; overflow: hidden;">
                    <!-- Background decoration -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1478146896981-b80fe463b330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') center/cover; opacity: 0.05;"></div>
                    
                    <h3 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 25px; position: relative; z-index: 1;">
                        <i class="fas fa-info-circle" style="margin-right: 10px;"></i>
                        Important Information
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; text-align: left; position: relative; z-index: 1;">
                        <div>
                            <h4 style="color: var(--text-dark); margin-bottom: 10px;">
                                <i class="fas fa-clock" style="margin-right: 8px; color: var(--primary-color);"></i>
                                RSVP Deadline
                            </h4>
                            <p style="color: var(--text-light);">Please respond by July 15th, 2025</p>
                        </div>
                        <div>
                            <h4 style="color: var(--text-dark); margin-bottom: 10px;">
                                <i class="fas fa-tshirt" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Dress Code
                            </h4>
                            <p style="color: var(--text-light);">Cocktail attire preferred</p>
                        </div>
                        <div>
                            <h4 style="color: var(--text-dark); margin-bottom: 10px;">
                                <i class="fas fa-car" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Parking
                            </h4>
                            <p style="color: var(--text-light);">Complimentary valet parking available</p>
                        </div>
                        <div>
                            <h4 style="color: var(--text-dark); margin-bottom: 10px;">
                                <i class="fas fa-phone" style="margin-right: 8px; color: var(--primary-color);"></i>
                                Questions?
                            </h4>
                            <p style="color: var(--text-light);">Contact us at (555) 123-4567</p>
                        </div>
                    </div>
                </div>

                <!-- Back to Invitation -->
                <div style="text-align: center; margin-top: 40px;">
                    <a href="{{ route('wedding.invitation') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>
                        Back to Invitation
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

@push('styles')
<style>
    /* Form specific styles */
    .form-control:hover {
        border-color: var(--primary-color);
    }

    input[type="radio"] {
        accent-color: var(--primary-color);
    }

    select.form-control {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 12px center;
        background-repeat: no-repeat;
        background-size: 16px 12px;
        padding-right: 40px;
        appearance: none;
    }

    /* Animation for form sections */
    .form-group {
        transition: all 0.3s ease;
    }

    .form-group:hover {
        transform: translateX(5px);
    }

    /* Conditional visibility */
    #guestSection.hidden,
    #dietarySection.hidden {
        opacity: 0.5;
        pointer-events: none;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const attendingRadios = document.querySelectorAll('input[name="attending"]');
        const guestSection = document.getElementById('guestSection');
        const dietarySection = document.getElementById('dietarySection');
        const guestsSelect = document.getElementById('guests');

        function toggleSections() {
            const attending = document.querySelector('input[name="attending"]:checked');
            
            if (attending && attending.value === '0') {
                // Not attending
                guestSection.classList.add('hidden');
                dietarySection.classList.add('hidden');
                guestsSelect.removeAttribute('required');
            } else if (attending && attending.value === '1') {
                // Attending
                guestSection.classList.remove('hidden');
                dietarySection.classList.remove('hidden');
                guestsSelect.setAttribute('required', 'required');
            }
        }

        attendingRadios.forEach(radio => {
            radio.addEventListener('change', toggleSections);
        });

        // Initialize on page load
        toggleSections();

        // Form validation with animations
        const form = document.getElementById('rsvpForm');
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let hasErrors = false;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#e74c3c';
                    field.style.animation = 'shake 0.5s ease-in-out';
                    hasErrors = true;
                } else {
                    field.style.borderColor = '#27ae60';
                    field.style.animation = 'none';
                }
            });

            if (hasErrors) {
                e.preventDefault();
                // Scroll to first error
                const firstError = form.querySelector('[style*="border-color: rgb(231, 76, 60)"]');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });

    // Shake animation for validation errors
    const style = document.createElement('style');
    style.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
    `;
    document.head.appendChild(style);
</script>
@endpush
@endsection
