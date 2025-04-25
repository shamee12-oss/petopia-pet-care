<?php
// Safe function declaration
if (!function_exists('showError')) {
    function showError($error) {
        if (!empty($error)) {
            return '<div class="error" style="color:red; margin-bottom:10px;">' . htmlspecialchars($error) . '</div>';
        }
        return '';
    }
}
// includes/functions.php

function requireLogin() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');
        exit;
    }
}

?>
