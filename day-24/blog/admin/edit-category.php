<?php
session_start();
if($_SESSION['id'] == null){
    header("Location: index.php");
}
require_once '../vendor/autoload.php';
$login = new App\classes\Login();

$category = new App\classes\Category();

if(isset($_GET['logout'])){
    $login->adminLogout();
}

$id = $_GET['id'];
$queryResult = $category->getCategoryInfoByID($id);
$categoryByID = mysqli_fetch_assoc($queryResult);

$message = '';
if (isset($_POST['btn'])){
    $message = $category->updateCategoryInfo($_POST);
}


//echo '<pre>';
//print_r($categoryByID);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php';?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <h1 class="h4 text-success mx-auto"><?php echo $message;?></h1>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="category_name" value="<?php echo $categoryByID['category_name'];?>">
                                <input type="hidden" class="form-control" id="inputEmail3" name="id" value="<?php echo $categoryByID['id'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea name="category_description" class="form-control" id="" cols="30" rows="10"><?php echo $categoryByID['category_description'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="1"> Published
                                <input type="radio" name="status" value="0"> unpublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success btn-block" name="btn">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

