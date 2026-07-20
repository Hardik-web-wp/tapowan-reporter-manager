<?php
if (!defined('ABSPATH')) exit;

class TRM_Plugin {
    public function run(): void {
        add_action('plugins_loaded', [$this, 'load_textdomain']);
        add_action('init', [$this, 'init']);
    }

    public function load_textdomain(): void {
        load_plugin_textdomain('tapowan-reporter-manager', false, dirname(TRM_BASENAME).'/languages');
    }

    public function init(): void {
        // Core hooks will be registered here.
    }
}
