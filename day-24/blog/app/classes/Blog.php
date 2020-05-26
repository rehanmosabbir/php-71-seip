<?php


namespace App\classes;


use App\classes\Database;

class Blog {
    public function saveBlogInfo($data){
        $categoryName =$data['category_name'];
        $blogTitle = $data['blog_title'];
        $shortDescription = $data['short_description'];
        $longDescription = $data['long_description'];
        $blogImage = $data['blog_image'];
        $status = $data['status'];
        $sql = "INSERT INTO blogs (category_name,blog_title,short_description,long_description,blog_image,status) VALUES ('$categoryName','$blogTitle','$shortDescription','$longDescription','$blogImage','$status')";

        if(mysqli_query(Database::dbConnection(),$sql)){
            $message = "Blog Information saved successfully";
            return $message;

        }else{
            die("Query Problem".mysqli_error(Database::dbConnection()));
        }
    }
}