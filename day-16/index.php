<?php

//    $x;
//    $x = 10;
//    echo $x;
//    echo '<br>';
//    $data = array();
//    $data = array(10,20,30,40,50);
//    $data = array('name'=>'Mosabbir','country'=>'Bangladesh','city'=>'Dhaka');

//    $data[0] = 10;
//    $data[1] = 20;
//    $data[2] = 30;

//    $data['name'] = 'Mosabbir';
//    $data['country'] = 'Bangladesh';
//    $data['city'] = 'Dhaka';
//
//    echo $data[2];
//    echo '<br>';
//    echo $data['city'];

//    foreach ($data as $x){
//        echo $x.' ';
//    }
//    echo '<pre>';
//    echo print_r($data);
//    echo var_dump($data);


    $data = array();

    $data[0][0]= 10;
    $data[0][1]= 20;
    $data[0][2]= 30;

    $data[1][0]= 40;
    $data[1][1]= 50;
    $data[1][2]= 60;

    $data[2][0]= 70;
    $data[2][1]= 80;
    $data[2][2]= 90;

    $data[3][0]= 100;
    $data[3][1]= 110;
    $data[3][2]= 120;

//    foreach ($data as $v_data){
//        echo $v_data[0].' '.$v_data[1].' '.$v_data[2].'<br>';
//    }

    foreach ($data as $v_data){
        foreach ($v_data as $v_v_data){
            echo $v_v_data.' ';
        }
        echo '<br>';
    }

























