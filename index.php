<?php
//Implement a queue using two stacks

//Good use case for stacks is testing symmetry. We are going to test a string of brackets to ensure
// that each closing bracket is the correct counterpart of an earlier opening bracket.
// For example imagine that you have the following bracket
// pairs: "[": "]", "<": ">", "{": "}", "(":")". You have to write down a function which will receive an input string ex "(<{}>)" and
// return the boolean value which says that string is correct or not.
//F("(<{}>)") => true
//F("(<{)") => false

$input = '{()}';

if (strlen($input) % 2 !== 0) echo 'NOPE';

$testLength = strlen($input) / 2;
$testSequence = str_split($input);


$matchList = [
    "[" => "]",
    "<" => ">",
    "{" => "}",
    "(" => ")"
];

$length = count($testSequence);
$testSequenceEnd = $testLength - 1;


for ($i = 0; $i < $length; $i++) {

    $isMatch = 1;
    $match = $testSequence[$testSequenceEnd];

    foreach ($matchList as $key => $value) {

        if ($testSequence[$i] === $key && $match === $value) {

            $isMatch = 2;

        }

    }

    $testSequenceEnd--;

}

echo $isMatch;


//print_r($arr);