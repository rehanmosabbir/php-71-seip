<?php


class Full_Name {
    public function make_full_name($data){
//        echo '<pre>';
//        echo print_r($data);
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $full_name = $first_name.' '.$last_name;
        return $full_name;
    }
    public function sumOddSumEven($data){
        $starting_number = $data['starting_number'];
        $ending_number = $data['ending_number'];
        $choice = $data['choice'];
        $sum = 0;
        if($starting_number<$ending_number){
            if($choice == 'odd'){
                for ($i = $starting_number;$i<=$ending_number;$i++){
                    if($i % 2 != 0){
                        $sum= $sum + $i;
                    }
                }
            }else {
                for ($i = $starting_number;$i<=$ending_number;$i++){
                    if($i % 2 == 0){
                        $sum+=$i;
                    }
                }
            }
        } else{
            if($choice == 'odd'){
                for ($i = $starting_number;$i>=$ending_number;$i--){
                    if($i % 2 != 0){
                        $sum+=$i;
                    }
                }
            }else {
                for ($i = $starting_number;$i>=$ending_number;$i--){
                    if($i % 2 == 0){
                        $sum+=$i;
                    }
                }
            }
        }
        return $sum;
    }
}