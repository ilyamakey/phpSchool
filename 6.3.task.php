<?php

require_once '6.1.task.php';
require_once '6.2.task.php';

$mike->studyTime(60);
$jim->studyTime(100);
$jack->studyTime(40);
$jane->studyTime(300);
$mary->studyTime(1000);

echo '<hr>';

foreach ($students as $student) {

    $student->showMyself();
    echo '<br>';

}