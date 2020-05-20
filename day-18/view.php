<?php
    require_once 'Demo.php';
    $demo = new Demo();
    $res = $demo->demo();

?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="text" name="last_number"></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd">Odd
                <input type="radio" name="choice" value="even">Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td>
                <textarea cols="30" rows="10">
                    <?php echo $res;?>
                </textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
