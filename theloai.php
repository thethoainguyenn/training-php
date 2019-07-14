<?php

require('./db_connect.php');
require('./model/loaitin.php');

$query = "SELECT * FROM loaitin";

$data = mysqli_query($connect, $query);

$loaitin = array();

while($row = mysqli_fetch_assoc($data)){
    array_push($loaitin, new LoaiTin($row['idTL'],$row['Ten'],$row['Ten_KhongDau']));
}

echo json_encode($loaitin );

?>