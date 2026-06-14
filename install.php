<?php

if (
    (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on') 
    && 
    (!isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || $_SERVER['HTTP_X_FORWARDED_PROTO'] != 'https')
) {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
    exit();
}

// Security headers
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

// Show message only if someone opens install.php directly
if (basename($_SERVER['SCRIPT_NAME']) == 'install.php') {
    die('<h2 style="text-align:center;margin-top:100px;font-family:Segoe UI">SSL is active ✅<br>This file runs in background. Go to <a href="/">homepage</a></h2>');
}
?>