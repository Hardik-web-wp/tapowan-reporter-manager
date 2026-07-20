<?php
if (!defined('ABSPATH')) exit;

class TRM_Admin {
    public function register_menu(): void {
        add_menu_page(
            'TAPOWAN Reporter Manager',
            'TAPOWAN',
            'manage_options',
            'tapowan-reporter-manager',
            [$this,'dashboard'],
            'dashicons-id',
            26
        );
    }

    public function dashboard(): void {
        echo '<div class="wrap"><h1>TAPOWAN Reporter Manager</h1><p>Dashboard coming soon.</p></div>';
    }
}
