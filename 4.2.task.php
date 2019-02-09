<?php

if(!isset($argv[1]) || !is_numeric($argv[1])) {

    echo 'Please enter one number';
    die;
}

$input = $argv[1];
$max = $input*$input;
$numbers = [];

$sequence = sequence($input, $max);
$sequenceLength = count($sequence);

function sequence($number, $maxItems)
{

    $arrays = $maxItems / $number;
    $digit = 1;
    $array = [];

    for ($i = 0; $i < $arrays; $i++) {

        for ($k = 0; $k < $number; $k++) {

            $array[$i][] = $digit;
            $digit++;
        }

    }

    return $array;
}

for ($i = 0; $i < $sequenceLength; $i++) {

    if ($i % 2 !== 0) {

        rsort($sequence[$i]);

    }

    $numbers[] = $sequence[$i];

}

for ($k = 0; $k < $sequenceLength; $k++) {

    $j = 0;

    for (; $j < $input; $j++) {

        echo $numbers[$j][$k] . ' ';

    }

    echo PHP_EOL;

}


