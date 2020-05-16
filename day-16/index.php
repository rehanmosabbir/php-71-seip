<?php

    $x;
    $x = 10;
    echo $x;
    echo '<br>';
    $data = array();
    $data = array(10,20,30,40,50);
//    $data = array('name'=>'Mosabbir','country'=>'Bangladesh','city'=>'Dhaka');

//    $data[0] = 10;
//    $data[1] = 20;
//    $data[2] = 30;

    $data['name'] = 'Mosabbir';
    $data['country'] = 'Bangladesh';
    $data['city'] = 'Dhaka';

    echo $data[2];
    echo '<br>';
    echo $data['city'];

//    foreach ($data as $x){
//        echo $x.' ';
//    }
    echo '<pre>';
//    echo print_r($data);
    echo var_dump($data);

