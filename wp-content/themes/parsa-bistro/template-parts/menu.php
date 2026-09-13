<?php
/**
 * Menu Section Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section" id="menu" style="background-color: var(--bg-secondary);">
    <div class="container">
        <div class="section-header">
            <div class="section-subtitle">Our Menu</div>
            <h2 class="section-title">Discover Our <span class="gold-text">Culinary Creations</span></h2>
            <p class="section-desc">
                Explore our carefully crafted dishes, from premium steaks to fresh seafood and handmade pasta.
            </p>
        </div>

        <!-- Menu Filter Bar -->
        <div class="menu-filter-bar">
            <div class="menu-category-tabs">
                <button class="menu-tab-btn active" data-category="all">All</button>
                <?php
                $categories = get_terms(array('taxonomy' => 'menu_category', 'hide_empty' => true));
                foreach ($categories as $category) {
                    ?>
                    <button class="menu-tab-btn" data-category="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </button>
                    <?php
                }
                ?>
            </div>
            
            <div class="dietary-filters">
                <button class="dietary-chip" data-diet="all">All</button>
                <?php
                $dietary = get_terms(array('taxonomy' => 'dietary', 'hide_empty' => true));
                foreach ($dietary as $term) {
                    ?>
                    <button class="dietary-chip" data-diet="<?php echo esc_attr($term->slug); ?>">
                        <?php echo esc_html($term->name); ?>
                    </button>
                    <?php
                }
                ?>
            </div>
            
            <div class="menu-search">
                <input type="text" id="menu-search-input" placeholder="Search menu items...">
            </div>
        </div>

        <!-- Menu Items Grid -->
        <div class="menu-items-grid">
            <?php
            $menu_items = new WP_Query(array(
                'post_type' => 'menu_item',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));
            
            if ($menu_items->have_posts()) :
                while ($menu_items->have_posts()) : $menu_items->the_post();
                    $price = get_post_meta(get_the_ID(), '_menu_item_price', true);
                    $pairing = get_post_meta(get_the_ID(), '_menu_item_pairing', true);
                    $categories = wp_get_post_terms(get_the_ID(), 'menu_category');
                    $dietary = wp_get_post_terms(get_the_ID(), 'dietary');
                    $category_slugs = wp_list_pluck($categories, 'slug');
                    $dietary_slugs = wp_list_pluck($dietary, 'slug');
                    ?>
                    <div class="menu-item-row" 
                         data-category="<?php echo esc_attr(implode(' ', $category_slugs)); ?>" 
                         data-diet="<?php echo esc_attr(implode(' ', $dietary_slugs)); ?>"
                         data-title="<?php echo esc_attr(get_the_title()); ?>">
                        <div class="menu-item-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="menu-item-details">
                            <div class="menu-item-header">
                                <span class="menu-item-name"><?php the_title(); ?></span>
                                <span class="menu-item-dots"></span>
                                <span class="menu-item-price"><?php echo esc_html($price); ?></span>
                            </div>
                            <p class="menu-item-description">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="menu-item-footer">
                                <div class="menu-item-tags">
                                    <?php foreach ($dietary as $term) : ?>
                                        <span class="badge badge-gold"><?php echo esc_html($term->name); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php if ($pairing) : ?>
                                    <span class="menu-item-pairing-note">Wine Pairing: <?php echo esc_html($pairing); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No menu items found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
