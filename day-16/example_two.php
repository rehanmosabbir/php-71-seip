<?php
    $result = '';
    if(isset($_POST['btn'])){
        echo '<pre>';
        echo print_r($_POST);
        $first_number = $_POST['first_number'];
        $last_number = $_POST['last_number'];
        $btn = $_POST['btn'];
        switch ($btn){
            case '+':
                $result = $first_number + $last_number;
                break;
            case '-':
                $result = $first_number - $last_number;
                break;
            case '*':
                $result = $first_number * $last_number;
                break;
            case '/':
                if($last_number != 0){
                    $result = $first_number / $last_number;
                }else {
                    $result = 'Last number can not be zero';
                }

                break;
            case '%':
                $result = $first_number % $last_number;
                break;
        }
    }
?>
<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="number" name="first_number"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="number" name="last_number"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>