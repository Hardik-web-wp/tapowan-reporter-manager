<?php
if (!defined('ABSPATH')) exit;

class TRM_Shortcodes {
    public function register(): void {
        add_shortcode('reporter_apply', [$this, 'render_apply']);
        add_shortcode('reporter_dashboard', [$this, 'render_dashboard']);
        add_shortcode('member_verification', [$this, 'render_verification']);
        add_shortcode('approved_reporters', [$this, 'render_approved']);
    }

    public function render_apply(): string { return '<div>TAPOWAN Reporter Apply form coming soon.</div>'; }
    public function render_dashboard(): string { return '<div>Reporter dashboard coming soon.</div>'; }
    public function render_verification(): string { return '<div>Member verification coming soon.</div>'; }
    public function render_approved(): string { return '<div>Approved reporters gallery coming soon.</div>'; }
}
