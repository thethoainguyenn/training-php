<?php
require('./db_connect.php');

$category_name      = $_POST['category_name'];
$slug               = $_POST['slug'];
$order              = $_POST['order'];
$published          = $_POST['published'];

$query = "INSERT INTO theloai VALUES(null, '$category_name', '$slug', '$order', '$published')";

if(mysqli_query($connect, $query)){
    echo "success";
} else {
    echo "error.insert.category";
}

?>