<?php
$test = 'test.txt';
$current = file_get_contents($test);
$current .= '12345';
file_put_contents($test, $current);
echo 'Test file was created<br>';

$new = 'new.txt';
$current = file_get_contents($new);
file_put_contents($new, $current);
echo 'New file was created<br>';

$files = ['1.txt', '2.txt', '3.txt'];
foreach ($files as $file) {
    $current = file_get_contents($file);
    file_put_contents($file, $current);
}

