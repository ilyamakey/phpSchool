<?php

$input = 'pwwekepwe';

function testUnic($input)
{

    $stringToArr = str_split($input);
    $length = count($stringToArr);
    $modArr = [[]];
    $uniqArr = [];

    for ($i = 0, $k = 0; $i < $length; $i++) {

        if (in_array($stringToArr[$i], $modArr[$k])) {

            ++$k;
        }

        $modArr[$k][] = $stringToArr[$i];

    }

    $max = count(max($modArr));

    foreach ($modArr as $key) {

        if (count($key) === $max) {

            $uniqArr[] = $key;
        }
    }

    echo '<pre>';
    print_r($uniqArr);
    echo '</pre>';

}

testUnic($input);