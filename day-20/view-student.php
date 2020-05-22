<?php
require_once 'vendor/autoload.php';
use App\classes\StudentInfo;
$message = '';
$queryResult = StudentInfo::getAllStudentInfo();
//while ($student = mysqli_fetch_assoc($queryResult)){
//    echo '<pre>';
//    print_r($student);
//}
?>
<hr>
<a href="add-student.php">add student</a>||
<a href="view-student.php">view student</a>
<h1 style="color: green;"><?php echo $message;?></h1>
<hr>
<table border="1" width="700">
    <tr>
        <th>ID</th>
        <th>Student's Name</th>
        <th>Email</th>
        <th>Mobile No</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $student['id'];?></td>
        <td><?php echo $student['name'];?></td>
        <td><?php echo $student['email'];?></td>
        <td><?php echo $student['mobile'];?></td>
    </tr>
    <?php } ?>
</table>

