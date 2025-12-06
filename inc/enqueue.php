<?php
/**
 * Enqueue Scripts and Styles
 *
 * Registers and enqueues all theme scripts and styles.
 * Handles versioning, dependency management, and conditional loading.
 *
 * Built: Dec-2025
 * Developer: Saad
 *
 * @package WPF-1.0
 * @author  Saad
 * @link    https://saadplayground.perceptiond.net/
 * @version 1.0.0
 * @since   1.0.0
 *
 * - Centralized asset management for maintainability.
 * - Uses wp_enqueue_* functions with proper dependencies and versioning.
 * - Load scripts/styles only where needed to optimize performance.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_enqueue_scripts', function() {
    // Enqueue styles and scripts only on the frontend, not in the Bricks Builder
    if ( ! function_exists( 'bricks_is_builder_main' ) || ! bricks_is_builder_main() ) {

        $theme_version = wp_get_theme()->get( 'Version' ); // Get theme version

        // Enqueue style.css
        wp_enqueue_style(
            'bricks-child',
            get_stylesheet_uri(),
            ['bricks-frontend'],
            $theme_version
        );

        // Enqueue theme.css from assets/css
        wp_enqueue_style(
            'theme-css',
            get_stylesheet_directory_uri() . '/assets/css/theme.css',
            [],
            $theme_version
        );

        // Enqueue custom theme.js from assets/js
        wp_enqueue_script(
            'theme-js',
            get_stylesheet_directory_uri() . '/assets/js/theme.js',
            [], 
            $theme_version,
            true
        );

    }
} );