<?php
session_start();
require_once '../../libs/room_type.php';
require_once '../../config/config.php';

if(isset($_POST['btn-edit'])){
    extract($_REQUEST);
    $date = date('d-m-Y');
    update_roomType($name,$price,$price_sale,$comment_id,$date,$id);
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=room_type');
    die();
}
?>

