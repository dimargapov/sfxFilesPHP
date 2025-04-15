<?php
$testTxt = file_get_contents('test.txt');
echo $testTxt.PHP_EOL;
$newInfo = file_get_contents('test.txt');
$newInfo .= 'This is a Test file'.PHP_EOL;
file_put_contents('test.txt', $newInfo);
echo $testTxt.PHP_EOL;