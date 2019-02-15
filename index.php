<?php
//Define a student class. A student has the following attributes: `firstname`, `lastname`,
// `gender` which can be "male" or "female", `status` which can be equal to "freshman", "sophomore", "junior", and "senior" and "gpa".
//
//Then define the following methods for the student class.
//
//The `showMyself` method will simply print all the attribute variables when called upon the object.
// This method has no input arguments.
//The `studyTime` method will increment the gpa of the student according to the following formula:
// ` gpa = gpa + log(study_time)`. The only input argument of this method is the variable study_time.
// In addition make sure that the gpa variable never exceeds 4.0 even if the student studies for a very long time.

class Student
{
    protected $firstName;
    protected $lastName;
    protected $gender;
    protected $status;
    protected $gpa;

    public function __construct($firstName = 'unknown name', $lastName = 'unknown lastname', $gender = 'male', $status = 'freshman')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->status = $status;

    }

    public function showMyself()
    {
        echo $this->firstName . PHP_EOL;
        echo $this->lastName . PHP_EOL;
        echo $this->gender . PHP_EOL;
        echo $this->status . PHP_EOL;
        echo $this->gpa . PHP_EOL;
    }

    public function studyTime($studyTime)
    {
        $this->gpa += log($studyTime);
    }
};

$mike = new Student('Mike', 'Doe');
$mike->studyTime(4);
$mike->studyTime(4);

$mike->showMyself();

