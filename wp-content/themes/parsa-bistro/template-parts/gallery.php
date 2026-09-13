<?php
/**
 * Gallery Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="gallery" style="background-color: var(--bg-secondary);">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Photo Gallery</div>
            <h2 class="section-title">Inside <span class="gold-text">Parsa</span></h2>
            <p class="section-desc">
                A look at our dining rooms, delicious dishes, and kitchen team.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Dining Room"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dish-wagyu.jpg" alt="Grilled Steak"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dish-pasta.jpg" alt="Fresh Pasta"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dish-lobster.jpg" alt="Fresh Lobster"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dish-dessert.jpg" alt="Chocolate Dessert"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            <div class="glass-card" style="overflow: hidden; height: 260px; border-radius: var(--radius-md);">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dish-cocktail.jpg" alt="Bar Drinks"
                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                    onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
            </div>
        </div>
    </div>
</section>
