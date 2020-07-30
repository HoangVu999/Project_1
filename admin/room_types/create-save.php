<?php
session_start();
require_once '../../libs/room_type.php';
require_once '../../config/config.php';

if(isset($_POST['btnsave'])){
    extract($_REQUEST);
    $date = date('Y-m-d');
    insert_roomType($name,$price,$price_sale,$comment_id,$date);
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=room_type');
    die();
}
?>


