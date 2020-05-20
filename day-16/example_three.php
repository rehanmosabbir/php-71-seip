<?php
    $result = '';
    if(isset($_POST['btn'])){
        echo '<pre>';
        echo print_r($_POST);

        $starting_number = $_POST['starting_number'];
        $ending_number = $_POST['ending_number'];
        $choice = $_POST['choice'];
        $result = '';
        if($starting_number <= $ending_number){
            if($choice === 'odd'){
                for ($i = $starting_number;$i<=$ending_number;$i++){
                    if($i % 2 != 0){
                        $result.=$i.' ';
                    }
                }
            } else {
                for ($i = $starting_number;$i<=$ending_number;$i++){
                    if($i % 2 == 0){
                        $result.=$i.' ';
                    }
                }
            }
        } else {
            if($choice === 'odd'){
                for ($i = $starting_number;$i>=$ending_number;$i--){
                    if($i % 2 != 0){
                        $result.=$i.' ';
                    }
                }
            } else {
                for ($i = $starting_number;$i>=$ending_number;$i--){
                    if($i % 2 == 0){
                        $result.=$i.' ';
                    }
                }
            }
        }
    }

?>
<form action="" method="post">
    <table>
        <tr>
            <td>Starting Number</td>
            <td><input type="number" name="starting_number"></td>
        </tr>
        <tr>
            <td>Ending Number</td>
            <td><input type="number" name="ending_number"></td>
        </tr>

        <tr>
            <td>Your Choice</td>
            <td>
                <input type="radio" name="choice" value="odd">Odd
                <input type="radio" name="choice" value="even">Even
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td><textarea id="" cols="30" rows="10"><?php echo $result;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="submit">
            </td>
        </tr>
    </table>
</form>