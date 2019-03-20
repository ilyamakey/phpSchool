<?php

class Car
{
    protected $carDetails = [];

    public function __construct($carType, $yom, $brand, $model, $vinCode)
    {
        $this->carDetails['carType'] = $carType;
        $this->carDetails['yom'] = $yom;
        $this->carDetails['brand'] = $brand;
        $this->carDetails['model'] = $model;
        $this->carDetails['vinCode'] = $vinCode;
    }

    public function showCarDetails()
    {
        echo '<pre>';
        print_r($this->carDetails);
        echo '</pre>';
    }
}

class MotorCar extends Car
{

    public function addTrim($trim)
    {
        $this->carDetails['trim'] = $trim;
    }

}

class Truck extends Car
{

    public function addCapacity($capacity)
    {
        $this->carDetails['capacity'] = $capacity;
    }

}

$car = new motorCar('motorcar', 2000, 'BMW', 'm105', 'C089652');
$car->addTrim('very good');
$car->showCarDetails();

$truck = new Truck('truck', 1995, 'Volvo', 'SX99', 'AA889');
$truck->addCapacity(999);
$truck->showCarDetails();