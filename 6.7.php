<?php

$input = '<({{}})>';

$matchList = [
    "[" => "]",
    "<" => ">",
    "{" => "}",
    "(" => ")"
];

$test = testSymmetry($input, $matchList);

print_r($test);

function testSymmetry($input, $matchList)
{
    if (strlen($input) % 2 !== 0) {

        throw new Exception('Wrong arguments quantity entered');

    };

    $inputArray = str_split($input);
    $inputArrayLength = count($inputArray);
    $arrayEdge = count($inputArray) / 2;
    $testSequence1 = [];
    $testSequence2 = [];

    for ($i = 0; $i < $arrayEdge; $i++) {

        if (!array_key_exists($inputArray[$i], $matchList)) {

            throw new Exception('Not valid input, should be only pairs: {}, [], <>, () or invalid sequence!');
        }

        $testSequence1[] = $inputArray[$i];

    }

    for ($i = $inputArrayLength - 1; $i >= $arrayEdge; $i--) {

        $testSequence2[] = $inputArray[$i];

    }

    for ($i = 0; $i < $arrayEdge; $i++) {


        if ($matchList[$testSequence1[$i]] !== $testSequence2[$i]) {

            return false;

        }
    }

    return true;

}







