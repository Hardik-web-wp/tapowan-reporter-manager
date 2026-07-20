<?php
if (!defined('ABSPATH')) exit;

class TRM_Deactivator {
    public static function deactivate(): void {
        flush_rewrite_rules();
    }
}
