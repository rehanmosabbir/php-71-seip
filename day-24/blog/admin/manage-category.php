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

$message = '';

if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $message = $category->deleteCategory($id);
}


$queryResult = $category->getAllCategoryInfo();
//while($categories = mysqli_fetch_assoc($queryResult)){
//    echo "<pre>";
//    print_r($categories);
//}




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
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <h1 class="h4 text-danger mx-auto"><?php echo $message;?></h1>
                <div class="card-body">

                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">SL No.</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Category Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php while($categories = mysqli_fetch_assoc($queryResult)){ ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $categories['id'];?></th>
                                <td><?php echo $categories['category_name'];?></td>
                                <td><?php echo $categories['category_description'];?></td>
                                <td><?php echo $categories['status'];?></td>
                                <td>
                                    <a href="edit-category.php?id=<?php echo $categories['id'];?>">Edit</a> ||
                                    <a href="?delete=true&id=<?php echo $categories['id'];?>" onclick="return confirm('Are you sure to delete this?');">Delete</a>
                                </td>
                            </tr>


                        </tbody>
                        <?php } ?>
                    </table>
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

