<?php
require_once 'vendor/autoload.php';
use App\classes\StudentInfo;

$id =  $_GET['id'];
$queryResult = StudentInfo::getStudentInfoById($id);
$student = mysqli_fetch_assoc($queryResult);
$message = '';
if(isset($_POST['btn'])){
    $message = StudentInfo::updateStudentInfo($_POST);
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
            <td>
                <input type="text" name="name" value="<?php echo $student['name']?>">
                <input type="hidden" name="id" value="<?php echo $student['id']?>">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $student['email']?>"></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input type="tel" name="mobile" value="<?php echo $student['mobile']?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>

