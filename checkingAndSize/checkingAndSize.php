<?php
//Проверьте, лежит ли в директории со скриптом файл test.txt.
//Проверьте, лежит ли в директории со скриптом файл test.txt. Если да - удалите его, если нет - создайте.

//$filename = 'test.txt';
//if (file_exists($filename)) {
//    unlink($filename);
//} else {
//    file_put_contents($filename, 'test');
//}

//Дан массив с именами файлов ['1.txt', '2.txt', '3.txt']. Переберите его циклом и проверьте каждый файл на существование.
//Выведите на экран имя каждого файла и рядом текст "существует" или "не существует".
$files = ['1.txt', '2.txt', '3.txt'];
foreach ($files as $file) {
    if (file_exists($file)) {
        echo "$file - существует<br>";
    } else {
        echo "$file - не существует<br>";
    }
}

//Пусть в директории со скриптом лежит файл test.txt. Узнайте его размер, выведите на экран.
$filename = 'test.txt';
echo 'Размер файла "test.txt": '.filesize($filename).' байта(ов)<br>';
$sizeBytes = filesize($filename);
$sizeKb = round($sizeBytes / 1024, 2);
echo "Размер файла - $sizeKb КБ<br>";

$picture = 'pic.jpg';
$sizeBytes = filesize($picture);
$sizeMb = round($sizeBytes / 1024 / 1024, 2);
echo "Размер картинки - $sizeMb МБ<br>";

$video = 'video.mp4';
$sizeBytes = filesize($video);
$sizeGb = round($sizeBytes / 1024 / 1024 / 1024, 2);
echo "Размер видео - $sizeGb ГБ";

//Дан файл test.txt. Прочитайте его текст, получите массив его строк.
$lines = file('test.txt', FILE_IGNORE_NEW_LINES);
echo '<pre>';
print_r($lines);
echo '<br>';

//Дан массив. Запишите элементы этого массива в файл test.txt так, чтобы каждый элемент начинался с новой строки.
//$array = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
//$data = implode(PHP_EOL, $array) . PHP_EOL;
//file_put_contents('test.txt', $data);

//Дан файл test.txt. В нем на каждой строке написано какое-то число.
//С помощью функции file найдите сумму этих чисел и выведете ее на экран.
$data = file('test.txt', FILE_IGNORE_NEW_LINES);
echo 'Сумма чисел - '.array_sum($data).'<br>';
$sum = array_sum($data);
file_put_contents('test.txt', $sum, FILE_APPEND);



