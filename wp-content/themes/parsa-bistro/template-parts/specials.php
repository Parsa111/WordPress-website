<?php
/**
 * Specials Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="specials">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Chef's Specials</div>
            <h2 class="section-title">Today's <span class="gold-text">Featured Dishes</span></h2>
            <p class="section-desc">
                Hand-picked selections from our chef, featuring seasonal ingredients and creative presentations.
            </p>
        </div>

        <div class="specials-grid">
            <?php
            $specials = new WP_Query(array(
                'post_type' => 'special',
                'posts_per_page' => 3,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));
            
            if ($specials->have_posts()) :
                while ($specials->have_posts()) : $specials->the_post();
                    $price = get_post_meta(get_the_ID(), '_menu_item_price', true);
                    ?>
                    <div class="special-card" data-title="<?php the_title_attribute(); ?>">
                        <div class="special-img-box">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <div class="special-price-tag"><?php echo esc_html($price); ?></div>
                        </div>
                        <div class="special-card-body">
                            <div class="special-badges">
                                <span class="badge badge-chef">⭐ Chef's Pick</span>
                            </div>
                            <h3 class="special-title"><?php the_title(); ?></h3>
                            <p class="special-desc">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="special-pairing">
                                🍷 <em>Pairs well with: White Wine</em>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No specials found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
