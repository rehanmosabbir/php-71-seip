<?php
function myPassword($data){
    $password = '';
    $password_length = $data['password_length'];
    $value = array('a','6','5','%','#','@','z','C','&','M');
    for ($i = 1; $i <= $password_length;$i++){
        $index = rand(0,9);
        $password.=$value[$index];
    }
    return $password;
}