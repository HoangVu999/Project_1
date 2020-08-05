<?php
session_start();
require_once "../../libs/room.php";
require_once "../../config/config.php";

if(isset($_POST['btnsave'])){
    extract($_REQUEST);
    
    insert_room($name_room,$room_type_id,$room_status);
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=room');
    die();
}
?>

