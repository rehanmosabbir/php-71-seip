<?php


class SimpleCalculator {
    function makeCalculator($data){
        $btn = $data['btn'];
        switch ($btn){
            case '+':
                $result = $data['first_number'] + $data['second_number'];
                break;
            case '-':
                $result = $data['first_number'] - $data['second_number'];
                break;
            case '*':
                $result = $data['first_number'] * $data['second_number'];
                break;
            case '/':
                $result = $data['first_number'] / $data['second_number'];
                break;
            case '%':
                $result = $data['first_number'] % $data['second_number'];
                break;

        }
        return $result;
    }
}