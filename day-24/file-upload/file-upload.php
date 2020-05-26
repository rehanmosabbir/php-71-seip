<?php
//    echo '<pre>';
//    print_r($_POST);
//    print_r($_FILES);
//    echo $_FILES['image_file']['name'];
    if(isset($_POST['btn'])){
        $directory = 'images/';
        $fileName = $_FILES['image_file']['name'];
        $imageURL = $directory.$fileName;
        $temp = $_FILES['image_file']['tmp_name'];

        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image_file']['tmp_name']);

        if($check){
            if(file_exists($imageURL)){
                die('This image already exists.Please select another one.Thanks.');
            }else{
                if($_FILES['image_file']['size'] > 500000){
                    die('Your file size is too large.');
                }else{
                    if($fileType != 'jpg' && $fileType != 'png'){
                        die('Image should be uploaded in jpg or png form');
                    }else{
                        move_uploaded_file($temp,$imageURL);
                    }
                }
            }
        }else{
            die('please chose a image file');
        }
//        echo '<pre>';
//        print_r($check);
//    echo $fileType;
//    move_uploaded_file($temp,$imageURL);
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select File</th>
            <td><input type="file" name="image_file"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
