<?php
/**
 * Plugin Name: TAPOWAN Reporter Manager
 * Plugin URI: https://github.com/Hardik-web-wp/tapowan-reporter-manager
 * Description: Reporter registration, approval, Press ID, Appointment Letter, and verification workflow for TAPOWAN.
 * Version: 1.0.0
 * Author: TAPOWAN
 * Text Domain: tapowan-reporter-manager
 * Domain Path: /languages
 * Requires PHP: 8.0
 * Requires at least: 6.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('TRM_VERSION', '1.0.0');
define('TRM_FILE', __FILE__);
define('TRM_PATH', plugin_dir_path(__FILE__));
define('TRM_URL', plugin_dir_url(__FILE__));
define('TRM_BASENAME', plugin_basename(__FILE__));

require_once TRM_PATH . 'includes/class-trm-activator.php';
require_once TRM_PATH . 'includes/class-trm-deactivator.php';

register_activation_hook(__FILE__, array('TRM_Activator', 'activate'));
register_deactivation_hook(__FILE__, array('TRM_Deactivator', 'deactivate'));

require_once TRM_PATH . 'includes/class-trm-plugin.php';

function trm_run_plugin(): void {
    $plugin = new TRM_Plugin();
    $plugin->run();
}

trm_run_plugin();
