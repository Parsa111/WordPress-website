<?php
/**
 * About Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="about">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Our Story</div>
            <h2 class="section-title">About <span class="gold-text">Parsa Restaurant</span></h2>
            <p class="section-desc">
                A culinary journey rooted in tradition, passion, and the finest ingredients.
            </p>
        </div>

        <div class="story-grid">
            <div class="story-content">
                <div class="story-badge-float">
                    <span class="badge badge-gold">👑 Est. 2010</span>
                </div>
                <h3>Where Tradition Meets Innovation</h3>
                <p>
                    Founded in 2010, Parsa Restaurant has been a cornerstone of Manhattan's dining scene. Our philosophy is simple: source the finest ingredients, treat them with respect, and let their natural flavors shine through.
                </p>
                <p>
                    Our executive chef brings over 20 years of experience from Michelin-starred kitchens across Europe and Asia, creating a unique fusion that honors classical techniques while embracing modern creativity.
                </p>
                <div style="margin-top: 2rem;">
                    <a href="#reservation" class="btn btn-gold">Experience Our Story</a>
                </div>
            </div>
            <div class="story-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Parsa Restaurant Interior" style="width: 100%; border-radius: var(--radius-md);">
            </div>
        </div>
    </div>
</section>
