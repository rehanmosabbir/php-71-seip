<?php
require_once 'Example.php';

class Demo extends Example {
    public $age = 12;
    protected $location = 'Jashore';
    private $mobile = '01534792915';


    public function newOne(){
        echo 'In new one';
        $this->subtraction();
    }
    protected function newTwo(){
        echo 'In new one';
    }
    private function newThree(){
        echo 'In new one';
    }
}