<?php
//Пусть в директории со скриптом лежит файл test.txt. Пусть также в директории со скриптом лежит папка dir.
//Переместите файл в эту папку.
//rename('test.txt', 'dir/test.txt');

//Пусть в директории со скриптом лежит папка dir1, а в ней файл test.txt.
//Пусть также в директории со скриптом лежит папка dir2. Переместите файл в эту папку.

//rename('dir1/test.txt', 'dir2/test.txt');

//Пусть в директории со скриптом лежит файл test.txt. Скопируйте его в файл copy.txt.
//copy('test.txt', 'copy.txt');

//Пусть в директории со скриптом лежит файл test.txt. Пусть также в директории со скриптом лежит папка dir.
//Скопируйте файл test.txt в папку dir. Копию файла также назовите test.txt.
$sourceFile = 'test.txt';
$destinationDir = 'dir';
$destinationFile = $destinationDir . '/test.txt';
copy($sourceFile, $destinationFile);

//Пусть в директории со скриптом лежит файл test.txt. Удалите его.
unlink('test.txt');

//Пусть в директории со скриптом лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов.
//Переберите его циклом и удалите все эти файлы.
$files = ['1.txt', '2.txt', '3.txt'];
foreach ($files as $file) {
    unlink($file);
}

