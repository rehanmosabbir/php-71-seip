<?php
    require_once 'vendor/autoload.php';
    use App\classes\StudentInfo;
    $message = '';
    if(isset($_POST['btn'])){
        $message = StudentInfo::saveStudentInfo($_POST);
    }
?>
<hr>
<a href="add-student.php">add student</a>||
<a href="view-student.php">view student</a>
<h1 style="color: green;"><?php echo $message;?></h1>
<hr>
<form action="" method="post">


    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input type="tel" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
