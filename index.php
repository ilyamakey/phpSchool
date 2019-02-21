<?php
//Implement a queue using two stacks

//Good use case for stacks is testing symmetry. We are going to test a string of brackets to ensure
// that each closing bracket is the correct counterpart of an earlier opening bracket.
// For example imagine that you have the following bracket
// pairs: "[": "]", "<": ">", "{": "}", "(":")". You have to write down a function which will receive an input string ex "(<{}>)" and
// return the boolean value which says that string is correct or not.
//F("(<{}>)") => true
//F("(<{)") => false

$input = '1234';

if (strlen($input) % 2 !== 0) echo 'NOPE';


$inputArray = str_split($input);
$inputArrayLength = count($inputArray);
$arrayEdge = count($inputArray) / 2;
$testSequence1 = [];
$testSequence2 = [];

for ($i = 0; $i < $arrayEdge; $i++) {

    $testSequence1[] = $inputArray[$i];

}

for ($i = $inputArrayLength - 1; $i >= $arrayEdge; $i--) {

    $testSequence2[] = $inputArray[$i];

}

foreach ($matchList as $item =>$match) {

    if ($item )

}

$matchList = [
    "[" => "]",
    "<" => ">",
    "{" => "}",
    "(" => ")"
];




//echo $isMatch;


//print_r($arr);