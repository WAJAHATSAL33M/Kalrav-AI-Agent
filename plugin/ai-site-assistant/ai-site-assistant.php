<?php
/**
 * Plugin Name: Kalrav Ai Agent
 * Description: AI-powered assistant for WordPress websites.
 * Version: 0.1.0
 * Author: AI Site Assistant Team
 * License: GPL-2.0-or-later
 * Text Domain: ai-site-assistant
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Plugin version.
 */
define( 'AI_SITE_ASSISTANT_VERSION', '0.1.0' );

/**
 * Plugin directory.
 */
define( 'AI_SITE_ASSISTANT_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin URL.
 */
define( 'AI_SITE_ASSISTANT_URL', plugin_dir_url( __FILE__ ) );

/**
 * Plugin initialization.
 */
function ai_site_assistant_init() {
    // Plugin initialization will be added here.
}

add_action( 'plugins_loaded', 'ai_site_assistant_init' );