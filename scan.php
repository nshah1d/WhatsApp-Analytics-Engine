<?php
header('Content-Type: application/json');

$directories = array();
$items = scandir('.');

foreach ($items as $item) {
    if ($item === '.' || $item === '..' || !is_dir($item)) {
        continue;
    }
    
    if (file_exists($item . '/_chat.txt')) {
        $directories[] = $item;
    }
}

echo json_encode($directories);
?>