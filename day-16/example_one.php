<?php

    $full_name = '';
    if(isset($_POST['btn'])){
        echo '<pre>';
        print_r($_POST);

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $full_name = $first_name.' '.$last_name;
    }

?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" value="<?php echo $full_name;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
