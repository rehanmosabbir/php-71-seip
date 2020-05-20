<?php


class Example {
    public $name = 'Mosabbir Rehan';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    public $value;

    public function __construct() {
//        echo 'In constructor';
//        $this->value = $data;

    }

    public function addition(){
        echo 'In addition';
        $this->division();
//        echo $this->value;
    }

    protected function subtraction(){
        echo 'In subtraction';
    }

    private function division(){
        echo 'In division';
    }
}