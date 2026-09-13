<?php
/**
 * Contact Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="contact" style="background-color: var(--bg-secondary);">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Contact Us</div>
            <h2 class="section-title">Get in <span class="gold-text">Touch</span></h2>
            <p class="section-desc">
                Have questions? We'd love to hear from you.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div class="contact-card">
                <div style="font-size: 2rem; margin-bottom: 1rem;">📍</div>
                <h3 style="margin-bottom: 0.5rem; color: var(--gold-primary);">Location</h3>
                <p style="color: var(--text-secondary);">
                    123 Fifth Avenue<br>
                    New York, NY 10001<br>
                    United States
                </p>
            </div>

            <div class="contact-card">
                <div style="font-size: 2rem; margin-bottom: 1rem;">📞</div>
                <h3 style="margin-bottom: 0.5rem; color: var(--gold-primary);">Phone</h3>
                <p style="color: var(--text-secondary);">
                    <a href="tel:+12125558900" style="color: inherit;">+1 (212) 555-8900</a><br>
                    <a href="mailto:info@parsa-restaurant.com" style="color: inherit;">info@parsa-restaurant.com</a>
                </p>
            </div>

            <div class="contact-card">
                <div style="font-size: 2rem; margin-bottom: 1rem;">🕐</div>
                <h3 style="margin-bottom: 0.5rem; color: var(--gold-primary);">Hours</h3>
                <p style="color: var(--text-secondary);">
                    Tue-Fri: 5:00 PM – 11:30 PM<br>
                    Sat-Sun: 4:30 PM – Midnight<br>
                    Monday: Private Events Only
                </p>
            </div>
        </div>
    </div>
</section>
