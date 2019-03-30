<?php

final class Single
{
    private static $instance;
    protected $param;

    private function __construct($param)
    {
        $this->param = $param;
    }

    public function getParam()
    {
        echo $this->param . PHP_EOL;
    }

    public static function getInstance($param)
    {
        if (!self::$instance) {

            self::$instance = new Single($param);

        }

        return self::$instance;
    }

}

$first = Single::getInstance('number one');

$second = Single::getInstance('two!');

var_dump($first === $second);