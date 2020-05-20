<?php

//require_once 'Demo.php';
//
//$obj_demo = new Demo();
//$obj_demo->addition();

//require_once 'Example.php';
//
//$obj_example = new Example(100);

//$obj_example->division(100,200);

$result = '';
if(isset($_POST['btn'])){
    require_once 'full_name.php';
    $obj_full_name = new Full_Name();
    $result = $obj_full_name->make_full_name($_POST);
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
            <td>Result</td>
            <td><input type="text" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
