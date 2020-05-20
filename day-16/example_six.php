<?php
    $word = '';
    $character = '';
    if(isset($_POST['btn'])){
        function wordStringCount($data){
            $given_string = $data['given_string'];
            $result['total_number_of_character']= strlen($given_string);
            $result['total_number_of_word'] = str_word_count($given_string);
            return $result;
        }
        $res = wordStringCount($_POST);
//        echo '<pre>';
//        echo print_r($res);
        $character = $res['total_number_of_character'];
        $word = $res['total_number_of_word'];
    }


?>

<form action="" method="post">
    <table>
        <tr>
            <td>Enter your string here</td>
            <td><input type="text" name="given_string"></td>
        </tr>
        <tr>
            <td>Total number of word</td>
            <td><input type="text" value="<?php echo $word;?>"></td>
        </tr>
        <tr>
            <td>Total number of character</td>
            <td><input type="text" value="<?php echo $character;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
