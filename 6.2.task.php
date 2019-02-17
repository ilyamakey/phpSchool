<?php

require_once '6.1.task.php';

$mike = new Student('Mike', 'Barnes', 4, 'junior', 'male');
$jim = new Student('Jim', 'Nickersson', 3, 'sophomore', 'male');
$jack = new Student('Jack', 'Indabox', 2.5, 'junior', 'male');
$jane = new Student('Jane', 'Miller', 3.6, 'senior', 'female');
$mary = new Student('Mary', 'Scott', 2.7, 'senior', 'female');

$students = [$mike, $jim, $jack, $jane, $mary];

foreach ($students as $student) {

    $student->showMyself();
    echo '<br>';

}

