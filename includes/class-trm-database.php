<?php
if (!defined('ABSPATH')) exit;

class TRM_Database {
    public static function table(string $name): string {
        global $wpdb;
        return $wpdb->prefix . 'tapowan_' . $name;
    }

    public static function applications(): string {
        return self::table('applications');
    }

    public static function reporters(): string {
        return self::table('reporters');
    }

    public static function payments(): string {
        return self::table('payments');
    }
}
