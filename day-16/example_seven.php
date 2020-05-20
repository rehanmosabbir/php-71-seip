<?php
    require_once 'function.php';
    $pass = '';
    if (isset($_POST['btn'])){

        $pass = myPassword($_POST);
    }
?>


<form action="" method="post">
    <table>
        <tr>
            <td>Your password length</td>
            <td><input type="text" name="password_length"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
        <tr>
            <td>Your Password:</td>
            <td><?php echo $pass;?></td>
        </tr>


    </table>
</form>