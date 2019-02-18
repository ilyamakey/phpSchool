<?php
//Implement a queue using two stacks

//Good use case for stacks is testing symmetry. We are going to test a string of brackets to ensure
// that each closing bracket is the correct counterpart of an earlier opening bracket.
// For example imagine that you have the following bracket
// pairs: "[": "]", "<": ">", "{": "}", "(":")". You have to write down a function which will receive an input string ex "(<{}>)" and
// return the boolean value which says that string is correct or not.
//F("(<{}>)") => true
//F("(<{)") => false

$input = '[]{}()';
$arr = str_split($input);

print_r($arr);