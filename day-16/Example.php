<?php

require_once 'Demo.php';
class Example extends Demo {
    public $color = 'red';
    protected $area = 'local';
    private $district = 'Jashore';
    public $a;

    public function __construct($x){
        echo 'Hello php';
        $this->a = $x;
    }

    protected function multiplication(){
        echo 'In multiplication';
    }
    public function division($x,$y){
//        echo 'In division';
//        echo $this->addition();
        $z = $x + $y;
        echo $z;
    }

    private function hello(){
        echo 'In hello';
    }

}