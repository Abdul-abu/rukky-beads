
<?php
error_reporting(0);
ini_set('display_errors', 0);

$files = array('index.php', 'gallery.php', 'comments.php');
$tags = '<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="shortcut icon" href="/favicon.ico">';

echo "<pre>";
foreach ($files as $f) {
    if (!file_exists($f)) {
        echo "$f - missing\n";
        continue;
    }
    $html = file_get_contents($f);
    if (strpos($html, 'favicon') !== false) {
        echo "$f - already done\n";
        continue;
    }
    $html = str_replace('</head>', $tags . "\n</head>", $html);
    file_put_contents($f, $html);
    echo "$f - patched\n";
}
echo "\nDone. Delete this file.";
echo "</pre>";
?>