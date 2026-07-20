<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

$roles = ['trm_reporter', 'trm_pending_reporter'];
foreach ($roles as $role) {
    remove_role($role);
}

delete_option('trm_version');
