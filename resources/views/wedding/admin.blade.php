@extends('layouts.wedding')

@php
use Illuminate\Support\Str;
@endphp

@section('title', 'RSVP Admin - Herlou & Nhove')

@section('content')
<div class="admin-page">
    <div class="container">
        <section style="padding: 50px 0;">
            <div style="text-align: center; margin-bottom: 50px;">
                <h1 data-animate="animate-fade-in-down" style="font-family: 'Dancing Script', cursive; font-size: 3.5rem; color: var(--primary-color); margin-bottom: 20px;">
                    RSVP Admin Dashboard
                </h1>
                <p data-animate="animate-fade-in-up" style="font-size: 1.2rem; color: var(--text-light);">
                    Manage and view all wedding RSVPs
                </p>
            </div>

            <!-- Stats Cards -->
            <div data-animate="animate-fade-in-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-bottom: 50px;">
                <div style="background: linear-gradient(135deg, #27ae60, #2ecc71); color: white; padding: 30px; border-radius: 15px; text-align: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
                    <i class="fas fa-check-circle" style="font-size: 2.5rem; margin-bottom: 15px; position: relative; z-index: 1;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 5px; position: relative; z-index: 1;">{{ $rsvps->where('attending', true)->count() }}</h3>
                    <p style="position: relative; z-index: 1;">Attending</p>
                </div>
                <div style="background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; padding: 30px; border-radius: 15px; text-align: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
                    <i class="fas fa-times-circle" style="font-size: 2.5rem; margin-bottom: 15px; position: relative; z-index: 1;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 5px; position: relative; z-index: 1;">{{ $rsvps->where('attending', false)->count() }}</h3>
                    <p style="position: relative; z-index: 1;">Not Attending</p>
                </div>
                <div style="background: linear-gradient(135deg, var(--primary-color), var(--light-blue)); color: white; padding: 30px; border-radius: 15px; text-align: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
                    <i class="fas fa-users" style="font-size: 2.5rem; margin-bottom: 15px; position: relative; z-index: 1;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 5px; position: relative; z-index: 1;">{{ $rsvps->where('attending', true)->count() }}</h3>
                    <p style="position: relative; z-index: 1;">Total Attending</p>
                </div>
                <div style="background: linear-gradient(135deg, #3498db, #2980b9); color: white; padding: 30px; border-radius: 15px; text-align: center; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: rgba(255, 255, 255, 0.1); border-radius: 50%;"></div>
                    <i class="fas fa-reply" style="font-size: 2.5rem; margin-bottom: 15px; position: relative; z-index: 1;"></i>
                    <h3 style="font-size: 2rem; margin-bottom: 5px; position: relative; z-index: 1;">{{ $rsvps->count() }}</h3>
                    <p style="position: relative; z-index: 1;">Total RSVPs</p>
                </div>
            </div>

            <!-- RSVP List -->
            <div data-animate="animate-fade-in-up" style="background: var(--white); border-radius: 20px; padding: 40px; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);">
                <h2 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 30px; display: flex; align-items: center;">
                    <i class="fas fa-list" style="margin-right: 15px; color: var(--primary-color);"></i>
                    All RSVPs
                </h2>

                @if($rsvps->count() > 0)
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                            <thead>
                                <tr style="background: var(--secondary-color);">
                                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Name</th>
                                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Relationship</th>
                                    <th style="padding: 15px; text-align: center; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Status</th>
                                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Message</th>
                                    <th style="padding: 15px; text-align: left; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Date</th>
                                    <th style="padding: 15px; text-align: center; border-bottom: 2px solid var(--primary-color); color: var(--text-dark); font-weight: 600;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rsvps as $rsvp)
                                    <tr style="border-bottom: 1px solid #eee; transition: background-color 0.3s ease;" 
                                        onmouseover="this.style.backgroundColor='var(--secondary-color)'" 
                                        onmouseout="this.style.backgroundColor='transparent'">
                                        <td style="padding: 15px; color: var(--text-dark); font-weight: 600;">{{ $rsvp->name }}</td>
                                        <td style="padding: 15px; color: var(--text-light);">{{ $rsvp->relationship }}</td>
                                        <td style="padding: 15px; text-align: center;">
                                            @if($rsvp->attending)
                                                <span style="background: #27ae60; color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                                                    <i class="fas fa-check" style="margin-right: 5px;"></i>
                                                    Attending
                                                </span>
                                            @else
                                                <span style="background: #e74c3c; color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                                                    <i class="fas fa-times" style="margin-right: 5px;"></i>
                                                    Not Attending
                                                </span>
                                            @endif
                                        </td>
                                        <td style="padding: 15px; color: var(--text-light); max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                            {{ $rsvp->message ? Str::limit($rsvp->message, 50) : 'No message' }}
                                        </td>
                                        <td style="padding: 15px; color: var(--text-light);">
                                            {{ $rsvp->created_at->format('M d, Y') }}
                                        </td>
                                        <td style="padding: 15px; text-align: center;">
                                            <button onclick="viewDetails({{ $rsvp->id }})" 
                                                    style="background: var(--primary-color); color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div style="text-align: center; padding: 60px 20px; color: var(--text-light);">
                        <i class="fas fa-inbox" style="font-size: 4rem; margin-bottom: 20px; opacity: 0.5;"></i>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">No RSVPs Yet</h3>
                        <p>RSVPs will appear here once guests start responding.</p>
                    </div>
                @endif
            </div>

            <!-- Quick Actions -->
            <div data-animate="animate-fade-in-up" style="margin-top: 40px; text-align: center;">
                <a href="{{ route('wedding.invitation') }}" class="btn btn-outline" style="margin-right: 20px;">
                    <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>
                    Back to Invitation
                </a>
                <button onclick="exportData()" class="btn btn-primary">
                    <i class="fas fa-download" style="margin-right: 10px;"></i>
                    Export RSVPs
                </button>
            </div>
        </section>
    </div>
</div>

<!-- RSVP Detail Modal -->
<div id="rsvpModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 2000; align-items: center; justify-content: center;">
    <div style="background: white; border-radius: 20px; max-width: 600px; width: 90%; max-height: 80vh; overflow-y: auto; position: relative;">
        <div style="padding: 40px;">
            <button onclick="closeModal()" style="position: absolute; top: 20px; right: 20px; background: none; border: none; font-size: 1.5rem; color: var(--text-light); cursor: pointer;">
                <i class="fas fa-times"></i>
            </button>
            
            <h3 style="font-size: 2rem; color: var(--primary-color); margin-bottom: 30px; text-align: center;">
                RSVP Details
            </h3>
            
            <div id="modalContent">
                <!-- Content will be populated by JavaScript -->
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Table responsive */
    @media (max-width: 768px) {
        table {
            font-size: 0.9rem;
        }
        
        th, td {
            padding: 10px 5px !important;
        }
    }

    /* Modal animations */
    #rsvpModal {
        animation: fadeIn 0.3s ease-out;
    }

    #rsvpModal > div {
        animation: slideInUp 0.3s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Button hover effects */
    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>
@endpush

@push('scripts')
<script>
    const rsvps = @json($rsvps);

    function viewDetails(rsvpId) {
        const rsvp = rsvps.find(r => r.id === rsvpId);
        if (!rsvp) return;

        const modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = `
            <div style="display: grid; gap: 20px;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Name</h4>
                        <p style="color: var(--text-dark); font-weight: 600;">${rsvp.name}</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Email</h4>
                        <p style="color: var(--text-dark);">${rsvp.email}</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Phone</h4>
                        <p style="color: var(--text-dark);">${rsvp.phone || 'Not provided'}</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Status</h4>
                        <p style="color: var(--text-dark); font-weight: 600;">
                            ${rsvp.attending ? '✅ Attending' : '❌ Not Attending'}
                        </p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Guests</h4>
                        <p style="color: var(--text-dark); font-weight: 600;">${rsvp.attending ? rsvp.guests : 'N/A'}</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">RSVP Date</h4>
                        <p style="color: var(--text-dark);">${new Date(rsvp.created_at).toLocaleDateString()}</p>
                    </div>
                </div>
                
                ${rsvp.dietary_restrictions ? `
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Dietary Restrictions</h4>
                        <p style="color: var(--text-dark); background: var(--secondary-color); padding: 15px; border-radius: 10px;">${rsvp.dietary_restrictions}</p>
                    </div>
                ` : ''}
                
                ${rsvp.message ? `
                    <div>
                        <h4 style="color: var(--primary-color); margin-bottom: 5px;">Message</h4>
                        <p style="color: var(--text-dark); background: var(--secondary-color); padding: 15px; border-radius: 10px;">${rsvp.message}</p>
                    </div>
                ` : ''}
            </div>
        `;

        document.getElementById('rsvpModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('rsvpModal').style.display = 'none';
    }

    function exportData() {
        // Create CSV content
        const headers = ['Name', 'Email', 'Phone', 'Attending', 'Guests', 'Dietary Restrictions', 'Message', 'RSVP Date'];
        const csvContent = [
            headers.join(','),
            ...rsvps.map(rsvp => [
                `"${rsvp.name}"`,
                `"${rsvp.email}"`,
                `"${rsvp.phone || ''}"`,
                rsvp.attending ? 'Yes' : 'No',
                rsvp.attending ? rsvp.guests : '',
                `"${rsvp.dietary_restrictions || ''}"`,
                `"${rsvp.message || ''}"`,
                new Date(rsvp.created_at).toLocaleDateString()
            ].join(','))
        ].join('\n');

        // Create and download file
        const blob = new Blob([csvContent], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'wedding-rsvps.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }

    // Close modal when clicking outside
    document.getElementById('rsvpModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });
</script>
@endpush
@endsection
