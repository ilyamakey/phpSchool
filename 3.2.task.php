<?php

$banknotes = [
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1
];

$banknotesCount = [];
$inputVal = (int)$argv[1];
$maxVal = 100000;
$minVal = 1;

if ($inputVal <= $maxVal && $inputVal >= $minVal && is_int($inputVal)) {

    for ($i = 0; count($banknotes) > $i; $i++) {

        if ($inputVal < $banknotes[$i]) {

            continue;

        }

        $banknotesCount[$banknotes[$i]] = intdiv($inputVal, $banknotes[$i]);
        $inputVal = $inputVal % $banknotes[$i];

    }

} else {

    echo 'The value mas be an integer with max value - 100000 UAH and min value - 1 UAH';
    die;

}



print_r($banknotesCount);