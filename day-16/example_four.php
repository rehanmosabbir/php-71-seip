<?php
    $result = '';
    if (isset($_POST['btn'])){
        echo '<pre>';
        echo print_r($_POST);
        $starting_number = $_POST['starting_number'];
        $ending_number = $_POST['ending_number'];

        $result = 0;
        for($i = $starting_number; $i <= $ending_number;$i++){
            $result += $i;
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
            <td>Result</td>
            <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
