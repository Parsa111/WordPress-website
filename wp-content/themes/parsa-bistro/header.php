<?php
/**
 * Header Template
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-info">
            <span class="top-bar-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                +1 (212) 555-8900
            </span>
            <span class="top-bar-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                123 Fifth Avenue, New York, NY 10001
            </span>
        </div>
        <div class="top-bar-info">
            <span class="status-indicator">
                Open Tonight: 5:00 PM – 11:30 PM
            </span>
            <span class="top-bar-item" style="color: var(--gold-light);">
                ⭐ Fresh Food & Warm Hospitality
            </span>
        </div>
    </div>
</div>

<!-- Header -->
<header id="site-header" class="site-header">
    <div class="container">
        <div class="header-inner">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <a href="<?php echo home_url(); ?>" class="brand-logo" id="brand-logo-link">
                    <div class="brand-crest">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                        </svg>
                    </div>
                    <div>
                        <span class="brand-title">Parsa</span>
                        <span class="brand-tagline">Restaurant & Bistro</span>
                    </div>
                </a>
                <?php
            }
            ?>

            <!-- Navigation Links -->
            <nav class="main-navigation" aria-label="Primary Navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'main-nav',
                    'fallback_cb' => 'parsa_bistro_default_menu',
                ));
                ?>
            </nav>

            <!-- Header Action Button -->
            <div class="header-actions">
                <a href="#reservation" class="btn btn-gold" id="header-reserve-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    Book a Table
                </a>
                <button class="mobile-menu-toggle" id="mobile-menu-btn" aria-label="Toggle Navigation Menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Drawer -->
<div class="mobile-drawer" id="mobile-drawer">
    <div class="mobile-drawer-header">
        <span class="brand-title">Parsa</span>
        <button class="mobile-drawer-close" id="mobile-drawer-close" aria-label="Close menu">&times;</button>
    </div>
    <ul class="mobile-nav-list">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'mobile-nav-list',
            'fallback_cb' => 'parsa_bistro_default_menu',
            'walker' => new Parsa_Bistro_Mobile_Walker(),
        ));
        ?>
    </ul>
</div>

<?php
/**
 * Default Menu Fallback
 */
function parsa_bistro_default_menu() {
    ?>
    <ul class="main-nav">
        <li><a href="#about" class="nav-link">About Us</a></li>
        <li><a href="#menu" class="nav-link">Our Menu</a></li>
        <li><a href="#specials" class="nav-link">Chef's Specials</a></li>
        <li><a href="#gallery" class="nav-link">Photos</a></li>
        <li><a href="#reviews" class="nav-link">Reviews</a></li>
        <li><a href="#contact" class="nav-link">Contact & Hours</a></li>
    </ul>
    <?php
}

/**
 * Mobile Menu Walker
 */
class Parsa_Bistro_Mobile_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li><a href="' . $item->url . '" class="mobile-nav-link">' . $item->title . '</a></li>';
    }
}
