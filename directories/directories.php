<?php
//Создайте в директории со скриптом папку с названием dir.
//mkdir('dir');

//Дан массив со строками. Создайте в директории со скриптом папки, названиями которых служат элементы этого массива
//$strings = ['model', 'view', 'controller'];
//foreach ($strings as $string) {
//    mkdir($string);
//}

//Создайте в директории со скриптом папку с названием test. Затем создайте в этой папке 3 файла: 1.txt, 2.txt, 3.txt.
//mkdir('test');
//file_put_contents('test/1.txt', '');
//file_put_contents('test/2.txt', '');
//file_put_contents('test/3.txt', '');

//Удаление папок
//rmdir('dir');

// Пусть в директории со скриптом лежит папка old. Переименуйте ее на new.
rename('old', 'new');

//Пусть в директории со скриптом лежит папка dir, а в ней какие-то текстовые файлы.
//Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак.
//Пусть в директории со скриптом лежит папка dir, а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов.
$dir = __DIR__ . '/dir';
$files = scandir($dir, SCANDIR_SORT_DESCENDING);
echo '<pre>';
print_r($files);
echo '<br>';
foreach ($files as $file) {
    file_get_contents($dir.'/'.$file);
    file_put_contents($dir.'/'.$file, '!', FILE_APPEND);
}

//Пусть дан путь к файлу. Проверьте, файл это или папка.
$path = __DIR__ . '/controller';
if (is_dir($path)) {
    echo 'Это папка';
} else if (is_file($path)) {
    echo 'Это файл';
}
echo '<br>';

//Пусть в директории со скриптом лежит папка dir, а в ней какие-то файлы и подпапки.
//Выведите на экран столбец имен файлов из папки dir.
//$dir = __DIR__ . '/dir';
//$filesAndDirs = scandir($dir, SCANDIR_SORT_DESCENDING);
//$files = [];
//foreach ($filesAndDirs as $file) {
//    if (is_file($dir.'/'.$file)) {
//        $files[] = $file;
//    }
//}
//echo '<pre>';
//print_r($files);
//echo '<br>';

//Пусть в директории со скриптом лежит папка dir, а в ней какие-то текстовые файлы и подпапки.
//В подпапках в свою очередь также могут быть текстовые файлы и подпапки.
//Рекурсивно пройдитесь по всем вложенным папкам и выведите в браузер пути ко всем текстовым файлам.
//Сразу добавляю еще и восклицательный знак в конец каждого файла
function findTXT($dir) {
    if ($dir === false) {
        echo 'Directory '.$dir.' not found';
        return;
    }
    $open = opendir($dir);
    if ($open === false) {
        echo 'Directory '.$dir.' not found';
        return;
    }
    while (($entry = readdir($open)) !== false) {
        if ($entry === "." || $entry === "..") {
            continue;
        }
        $path1 = $dir.'/'.$entry;
        if (is_dir($path1)) {
            findTXT($path1);
        } else {
            if (pathinfo($path1, PATHINFO_EXTENSION) === 'txt') {
                file_put_contents($path1, '!', FILE_APPEND);
                echo $path1.'<br>';
            }
        }
    }
    closedir($open);
}
findTXT(__DIR__ . '/dir');

//Пусть в директории со скриптом лежит папка dir с текстовыми файлами и подпапками.
//Удалите папку dir вместе с ее содержимым.
function recursiveDelete($dir) {
    if ($dir === false) {
        echo 'Directory '.$dir.' not found';
        return;
    }
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        if (is_dir($dir.'/'.$item)) {
            recursiveDelete($dir.'/'.$item);
        } else if (is_file($dir.'/'.$item)) {
            unlink($dir.'/'.$item);
        }
    }
    rmdir($dir);
}
recursiveDelete(__DIR__ . '/dir');


