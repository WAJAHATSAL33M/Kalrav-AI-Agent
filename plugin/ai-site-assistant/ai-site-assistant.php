<?php
/**
 * Plugin Name: AI Site Assistant
 * Description: AI-powered assistant for WordPress websites.
 * Version: 0.1.0
 * Author: AI Site Assistant Team
 * License: GPL-2.0-or-later
 * Text Domain: ai-site-assistant
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AI_SITE_ASSISTANT_VERSION', '0.1.0' );
define( 'AI_SITE_ASSISTANT_DIR', plugin_dir_path( __FILE__ ) );
define( 'AI_SITE_ASSISTANT_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load provider interface.
 */
require_once AI_SITE_ASSISTANT_DIR . 'providers/interface-provider.php';

/**
 * Load AI providers.
 */
require_once AI_SITE_ASSISTANT_DIR . 'providers/class-openai.php';
require_once AI_SITE_ASSISTANT_DIR . 'providers/class-anthropic.php';