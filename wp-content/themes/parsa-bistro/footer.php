<?php
/**
 * Footer Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: About -->
            <div>
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                    <div class="brand-crest" style="width: 40px; height: 40px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                        </svg>
                    </div>
                    <span class="brand-title" style="font-size: 1.2rem;">Parsa</span>
                </div>
                <p>
                    A warm and welcoming restaurant in Manhattan serving delicious steaks, fresh seafood, handmade pasta, and fine wine.
                </p>
                <div class="awards-row" style="margin-top: 1rem;">
                    <span class="award-item">⭐ Top Rated Food</span>
                    <span class="award-item">🍷 Great Wine Selection</span>
                </div>
            </div>

            <!-- Column 2: Navigation Links -->
            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#about" class="footer-link">About Us</a></li>
                    <li><a href="#menu" class="footer-link">Our Menu</a></li>
                    <li><a href="#specials" class="footer-link">Chef's Specials</a></li>
                    <li><a href="#reservation" class="footer-link">Book a Table</a></li>
                    <li><a href="#gallery" class="footer-link">Photo Gallery</a></li>
                    <li><a href="#reviews" class="footer-link">Customer Reviews</a></li>
                </ul>
            </div>

            <!-- Column 3: Hours of Service -->
            <div>
                <h4 class="footer-heading">Opening Hours</h4>
                <ul class="footer-hours-list">
                    <li class="footer-hours-item">
                        <span>Tuesday – Friday</span>
                        <strong style="color: var(--gold-light);">5:00 PM – 11:30 PM</strong>
                    </li>
                    <li class="footer-hours-item">
                        <span>Saturday & Sunday</span>
                        <strong style="color: var(--gold-light);">4:30 PM – Midnight</strong>
                    </li>
                    <li class="footer-hours-item">
                        <span>Weekend Lunch</span>
                        <strong style="color: var(--gold-light);">12:00 PM – 3:30 PM</strong>
                    </li>
                    <li class="footer-hours-item">
                        <span>Bar & Drinks</span>
                        <strong style="color: var(--gold-light);">Until 1:30 AM</strong>
                    </li>
                    <li class="footer-hours-item">
                        <span>Monday</span>
                        <span style="color: var(--crimson-accent);">Private Events Only</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div>
                <h4 class="footer-heading">Join Our Newsletter</h4>
                <p style="font-size: 0.88rem; color: var(--text-secondary); margin-bottom: 0.85rem;">
                    Sign up to receive special menu updates, holiday offers, and invitations to wine dinners at Parsa.
                </p>
                <form class="newsletter-form" id="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address..." required>
                    <button type="submit" class="btn btn-gold" style="padding: 0.65rem 1rem; font-size: 0.75rem;">Join</button>
                </form>
                <div style="margin-top: 1.25rem; font-size: 0.8rem; color: var(--text-muted);">
                    🚗 Free valet parking available right at our front entrance.
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div>
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
            </div>
            <div style="display: flex; gap: 1.5rem;">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Dress Code</a>
                <a href="#" class="footer-link">Directions</a>
                <a href="#site-header" class="footer-link" style="color: var(--gold-primary);">Back to Top ↑</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
