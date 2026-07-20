<?php
if (!defined('ABSPATH')) exit;

class TRM_Activator {
    public static function activate(): void {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charset = $wpdb->get_charset_collate();
        $table = $wpdb->prefix . 'tapowan_applications';

        $sql = "CREATE TABLE {$table} (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            application_no VARCHAR(30) NOT NULL,
            full_name VARCHAR(190) NOT NULL,
            email VARCHAR(190) DEFAULT NULL,
            mobile VARCHAR(20) DEFAULT NULL,
            status VARCHAR(30) DEFAULT 'pending',
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            UNIQUE KEY application_no (application_no)
        ) {$charset};";

        dbDelta($sql);

        add_role('trm_reporter','Reporter',['read'=>true]);
        add_role('trm_pending_reporter','Pending Reporter',['read'=>true]);

        update_option('trm_version','1.0.0');
    }
}
