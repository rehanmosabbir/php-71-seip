<?php
    $result = '';
    if(isset($_POST['btn'])){
        require_once 'full_name.php';
        $obj_full_name = new Full_Name();
        $result = $obj_full_name->sumOddSumEven($_POST);
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
            <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="btn"></td>
        </tr>

    </table>
</form>
