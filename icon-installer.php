<?php
error_reporting(0);
ini_set('display_errors', 0);

$tags = '<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="shortcut icon" href="/favicon.ico">';

file_put_contents('header.php', $tags);
echo "<pre>header.php created with all favicon links.\n\nNow do this 3 times:\n1. Open index.php\n2. Find </title>\n3. Paste <?php include 'header.php'; ?> right after it\nRepeat for gallery.php and comments.php\nDone. Delete this file.</pre>";
?>