<?php
function display_admin_success_message()
{
    if (isset($_SESSION['success_message'])) {
        echo '<div class="notice notice-success is-dismissible"><p>' . esc_html($_SESSION['success_message']) . '</p></div>';
        unset($_SESSION['success_message']);
    } elseif (isset($_SESSION['error_message'])) {
        echo '<div class="notice notice-error is-dismissible"><p>' . esc_html($_SESSION['error_message']) . '</p></div>';
        unset($_SESSION['error_message']);
    }
}
