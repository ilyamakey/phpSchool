<?php

class Student
{
    protected $info = [
        'firstName' => '',
        'lastName' => '',
        'gender' => '',
        'status' => '',
        'gpa' => 0
    ];

    protected $maxGpa = 4;

    public function __construct($firstName,
                                $lastName,
                                $gpa = 0,
                                $status,
                                $gender
    )
    {
        $this->info['firstName'] = $firstName;
        $this->info['lastName'] = $lastName;

        if ($gender !== 'male' && $gender !== 'female') {

            throw new Exception("The gender should be 'male' or 'female'");

        } else {

            $this->info['gender'] = $gender;

        }

        switch ($status) {
            case 'freshman':
                $this->info['status'] = $status;
                break;
            case 'sophomore':
                $this->info['status'] = $status;
                break;
            case 'junior':
                $this->info['status'] = $status;
                break;
            case 'senior':
                $this->info['status'] = $status;
                break;
            default:
                throw new Exception("The status should be one of these: 'freshman', 'sophomore', 'junior', and 'senior'");
        }

        $this->info['gpa'] = $gpa;

    }

    public function showMyself()
    {
        foreach ($this->info as $key => $value) {

            echo "{$key}: {$value} <br>";

        }
    }

    public function studyTime($studyTime)
    {
        if (!is_numeric($studyTime) || $studyTime <= 0) return;

        $gpa = $this->info['gpa'] + round(log($studyTime / 60), 2);

        if ($gpa > $this->maxGpa) {

            $this->info['gpa'] = $this->maxGpa;

        } else {

            $this->info['gpa'] = $gpa;

        }

    }
};