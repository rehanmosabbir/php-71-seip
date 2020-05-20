<?php


class Demo{
    public $name = 'Mosabbir';
    protected $country = 'Bangladesh';
    private $city = 'Dhaka';

    public function addition(){
//        echo 'In addition';
        echo $this->subtraction();
    }

    protected function subtraction(){
        $res =  'In subtraction';
        echo $res;
    }

    private function remainder(){
        echo 'In remainder';
    }
}