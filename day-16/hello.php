<?php

class helloWorld{
    public $name = 'BITM';
    public $city = 'Dhaka';

    function add(){
        echo 'Hello World';
    }
    function subtraction(){
        echo 'Hello Bangladesh';
    }
}

$obj_helloWorld = new helloWorld();
$obj_helloWorld->add();