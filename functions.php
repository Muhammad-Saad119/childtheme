<?php
/**
 * Theme Functions Loader
 *
 * Loads all core theme files and initializes functionality.
 * Keeps the main functions.php lean by organizing logic into modular includes.
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
 * - Load only required files for clarity and performance.
 * - Maintain consistent structure across all includes.
 * - Avoid adding direct logic here—keep all functionality in separate modules.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$includes = array(
	'/inc/enqueue.php',           // This is the file where all scripts and styles are enqueued 
	'/inc/child-functions.php',   // This is the file where all custom functions for the theme are added.
);