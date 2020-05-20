<?php


class Demo {
    function demo(){
        if(isset($_POST['btn'])){
            $firstNumber = $_POST['first_number'];
            $lastNumber = $_POST['last_number'];
            $choice = $_POST['choice'];


            $result ='';

            if($firstNumber < $lastNumber){
                for($i = $firstNumber;$i <= $lastNumber;$i++){
                    if($i%2 != 0 && $choice === 'odd'){
                        $result.=$i.' ';
                    }
                    if($i%2 == 0 && $choice === 'even'){
                        $result.=$i.' ';
                    }
                }
            }else{
                for($i = $firstNumber;$i >= $lastNumber;$i--){
                    if($i%2 != 0 && $choice === 'odd'){
                        $result.=$i.' ';
                    }
                    if($i%2 == 0 && $choice === 'even'){
                        $result.=$i.' ';
                    }
                }
            }



            return $result;
        }
    }
}