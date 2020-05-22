<?php
    require_once 'vendor/autoload.php';
    use App\classes\Demo;
    use App\classes\Student;

    Student::addition();
    if(isset($_POST['btn'])){
        $res  = Demo::wordCharacterCount($_POST);
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="30"></td>
        </tr>
        <tr>
            <th>Total number of words</th>
            <td><input type="text" value="<?php echo $res['word_count'];?>"></td>
        </tr>
        <tr>
            <th>Total number of characters</th>
            <td><input type="text" value="<?php echo $res['string_length'];?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
