<?php
// 引数に指定された自然数を$numに格納する
$num = $argv[1];

// ここから処理を記述してください 

for ($i = 1; $i <= $num; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz ';
    } elseif ($i % 3 == 0) {
        echo 'Fizz ';
    } elseif ($i % 5 == 0) {
        echo 'Buzz ';
    } else {
        echo $i . ' ';
    }
}
?>

