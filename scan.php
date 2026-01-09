<?php
header('Content-Type: application/json');

$chatData = [];
$items = scandir('.');

foreach ($items as $folder) {
    if ($folder === '.' || $folder === '..' || !is_dir($folder)) {
        continue;
    }
    
    if (file_exists($folder . '/_chat.txt')) {
        $files = scandir($folder);
        $cleanFiles = array_values(array_diff($files, ['.', '..']));
        
        $chatData[] = [
            'id' => $folder,
            'files' => $cleanFiles
        ];
    }
}

echo json_encode($chatData);
?>
