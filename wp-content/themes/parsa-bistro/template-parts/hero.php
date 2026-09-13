<?php
/**
 * Hero Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="hero-section">
    <div class="hero-background">
        <?php
        $hero_image = get_theme_mod('parsa_hero_image', get_template_directory_uri() . '/assets/images/hero.jpg');
        ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="Parsa Restaurant" class="hero-bg-img">
    </div>
    
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">👑 Fine Dining Experience</div>
            <h1 class="hero-title">
                Welcome to <span class="gold-text">Parsa</span>
            </h1>
            <p class="hero-subtitle">
                Where every dish tells a story of passion, tradition, and culinary excellence.
            </p>
            <div class="hero-actions">
                <a href="#menu" class="btn btn-gold">Explore Our Menu</a>
                <a href="#reservation" class="btn btn-outline">Book a Table</a>
            </div>
            
            <!-- Quick Reservation Bar -->
            <div class="hero-quick-bar">
                <form class="quick-bar-form" action="#reservation" method="GET">
                    <div class="quick-select">
                        <label for="quick-date">Date</label>
                        <input type="date" id="quick-date" name="date" required>
                    </div>
                    <div class="quick-select">
                        <label for="quick-time">Time</label>
                        <select id="quick-time" name="time" required>
                            <option value="">Select Time</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="21:00">9:00 PM</option>
                        </select>
                    </div>
                    <div class="quick-select">
                        <label for="quick-guests">Guests</label>
                        <select id="quick-guests" name="guests" required>
                            <option value="">Guests</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="8">8+ People</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gold">Find Table</button>
                </form>
            </div>
        </div>
    </div>
</section>
