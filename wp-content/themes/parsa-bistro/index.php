<?php
/**
 * Main Template File
 *
 * @package Parsa_Bistro
 * @since 1.0.0
 */

get_header();
?>

<main>
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero'); ?>

    <!-- About Section -->
    <?php get_template_part('template-parts/about'); ?>

    <!-- Menu Section -->
    <?php get_template_part('template-parts/menu'); ?>

    <!-- Specials Section -->
    <?php get_template_part('template-parts/specials'); ?>

    <!-- Gallery Section -->
    <?php get_template_part('template-parts/gallery'); ?>

    <!-- Reviews Section -->
    <?php get_template_part('template-parts/reviews'); ?>

    <!-- Reservation Section -->
    <?php get_template_part('template-parts/reservation'); ?>

    <!-- Contact Section -->
    <?php get_template_part('template-parts/contact'); ?>
</main>

<?php
get_footer();
