<?php
/**
 * Reservation Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="reservation">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Reservations</div>
            <h2 class="section-title">Book Your <span class="gold-text">Table</span></h2>
            <p class="section-desc">
                Reserve your spot for an unforgettable dining experience.
            </p>
        </div>

        <div class="reservation-wrapper">
            <form id="reservation-form" class="reservation-form">
                <div class="reservation-form-grid">
                    <div class="form-group">
                        <label class="form-label" for="res_date">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            Select Date *
                        </label>
                        <input type="date" id="res_date" name="res_date" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="res_guests">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Number of Guests *
                        </label>
                        <select id="res_guests" name="res_guests" class="form-select" required>
                            <option value="1">1 Person</option>
                            <option value="2" selected>2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="8">8 People</option>
                            <option value="12">12+ People (Private Room)</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Choose Where to Sit *
                        </label>
                        <div class="seating-options" id="seating-options-group">
                            <div class="seating-card selected" data-area="Main Dining Room">
                                <div style="font-size: 1.5rem;">🥂</div>
                                <div class="seating-title">Main Dining Room</div>
                                <div class="seating-desc">Comfortable tables and booths</div>
                            </div>

                            <div class="seating-card" data-area="Chef's Counter">
                                <div style="font-size: 1.5rem;">🔪</div>
                                <div class="seating-title">Chef's Counter</div>
                                <div class="seating-desc">Watch the chefs cook live</div>
                            </div>

                            <div class="seating-card" data-area="Private Wine Room">
                                <div style="font-size: 1.5rem;">🍷</div>
                                <div class="seating-title">Private Wine Room</div>
                                <div class="seating-desc">Quiet room surrounded by fine wine</div>
                            </div>

                            <div class="seating-card" data-area="Garden Patio">
                                <div style="font-size: 1.5rem;">🌿</div>
                                <div class="seating-title">Garden Patio</div>
                                <div class="seating-desc">Heated outdoor terrace with city views</div>
                            </div>
                        </div>
                        <input type="hidden" id="selected_seating" name="res_seating" value="Main Dining Room">
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            Available Times *
                        </label>
                        <div class="time-slots" id="time-slots-group">
                            <button type="button" class="time-slot-btn" data-time="17:00">5:00 PM</button>
                            <button type="button" class="time-slot-btn" data-time="17:30">5:30 PM</button>
                            <button type="button" class="time-slot-btn" data-time="18:00">6:00 PM</button>
                            <button type="button" class="time-slot-btn" data-time="18:30">6:30 PM</button>
                            <button type="button" class="time-slot-btn selected" data-time="19:00">7:00 PM</button>
                            <button type="button" class="time-slot-btn" data-time="19:30">7:30 PM</button>
                            <button type="button" class="time-slot-btn" data-time="20:00">8:00 PM</button>
                            <button type="button" class="time-slot-btn" data-time="20:30">8:30 PM</button>
                            <button type="button" class="time-slot-btn" data-time="21:00">9:00 PM</button>
                            <button type="button" class="time-slot-btn" data-time="21:30">9:30 PM</button>
                        </div>
                        <input type="hidden" id="selected_time" name="res_time" value="19:00">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="guest_name">Your Name *</label>
                        <input type="text" id="guest_name" name="guest_name" class="form-input" placeholder="e.g. John Smith" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="guest_email">Email Address *</label>
                        <input type="email" id="guest_email" name="guest_email" class="form-input" placeholder="e.g. john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="guest_phone">Phone Number *</label>
                        <input type="tel" id="guest_phone" name="guest_phone" class="form-input" placeholder="e.g. (212) 555-0199" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="res_occasion">Occasion (Optional)</label>
                        <select id="res_occasion" name="res_occasion" class="form-select">
                            <option value="Dinner with Friends">Dinner with Friends</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Anniversary">Anniversary</option>
                            <option value="Business Dinner">Business Dinner</option>
                            <option value="Special Celebration">Special Celebration</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label" for="res_notes">Special Requests (Optional)</label>
                        <textarea id="res_notes" name="res_notes" class="form-textarea" rows="3" placeholder="Any dietary restrictions, allergies, or special requests..."></textarea>
                    </div>

                    <div class="form-group full-width">
                        <button type="submit" class="btn btn-gold" style="width: 100%;">Confirm Reservation</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
