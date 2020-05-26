<?php


namespace App\classes;

use App\classes\Database;

class Category {
    public function saveCategoryInfo($data){
        $categoryName =$data['category_name'];
        $categoryDescription = $data['category_description'];
        $status = $data['status'];
        $sql = "INSERT INTO categories (category_name,category_description,status) VALUES ('$categoryName','$categoryDescription','$status')";

        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Category Information saved successfully";
            return $message;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllCategoryInfo(){
        $sql = "SELECT * FROM categories";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
    public function getCategoryInfoByID($id){
        $sql = "SELECT * FROM categories WHERE id='$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function updateCategoryInfo($data){
        $sql = "UPDATE categories SET category_name='$data[category_name]',category_description='$data[category_description]',status='$data[status]' WHERE id='$data[id]'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            header('Location: manage-category.php');

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteCategory($id){
        $sql = "DELETE FROM categories WHERE id='$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Category Information deleted successfully";
            return $message;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }

    }
}