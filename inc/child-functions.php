<?php
/**
 * Child Theme Functions
 *
 * Functions and customizations for the Saad Playground child theme.
 * This file extends and overrides the parent theme functionality where needed.
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
 * - Extend parent theme functionality.
 * - Add or override features safely.
 * - Keep this file lightweight and modular.
 */

// Prevent direct script access
if ( !defined( 'ABSPATH' ) )
    die ( 'No direct script access allowed' );


// Open site wrapper before the Bricks header
add_action('bricks_before_header', function() {
    echo '<div class="site-wrapper">';
});

// Close site wrapper after the Bricks footer
add_action('bricks_after_footer', function() {
    echo '</div>';
});