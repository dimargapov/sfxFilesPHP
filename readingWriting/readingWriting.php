<?php
//Пусть в директории со скриптом лежит файл test.txt, в котором записан текст '12345'.
//Откройте этот файл, запишите в конец текста восклицательный знак и сохраните новый текст обратно в файл.

$file = 'test.txt';
$char = '!';
file_put_contents($file, $char, FILE_APPEND);

//Пусть в директории со скриптом лежит файл count.txt. Изначально в нем записано число 0.
//Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1.
//То есть у нас получится счетчик обновления страницы в виде файла.

$count = 'count.txt';
if (file_exists($count)) {
    $num = file_get_contents($count);
    $num++;
    file_put_contents($count, $num);
} else {
    $num = 0;
    file_put_contents($count, $num);
}
echo "Вы обновили страницу $num раз(а)";

//Пусть в директории со скриптом лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов.
//Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt.
//Изначально этого файла не должно быть.

//$files = ['1.txt', '2.txt', '3.txt'];
//$info = '';
//foreach ($files as $file) {
//    if (file_exists($file)) {
//        $info .= file_get_contents($file);
//    }
//}
//file_put_contents('new.txt', $info);


//Пусть в директории со скриптом лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов.
//Переберите его циклом и в текст каждого файла в конец запишите восклицательный знак.
$files = ['1.txt', '2.txt', '3.txt'];
foreach ($files as $file) {
    if (file_exists($file)) {
        $info = file_get_contents($file);
        $info .= '!';
        file_put_contents($file, $info, FILE_APPEND);
    }
}

//Пусть в директории со скриптом лежит файл old.txt. Переименуйте его на new.txt.
rename('old.txt', 'new.txt');

