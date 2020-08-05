<?php
session_start();
//Thêm kết nối database
require_once "../../libs/room.php";
require_once "../../config/config.php";
if (isset($_POST['btn-save-rooms'])) {
    extract($_REQUEST);
    $date = date('d-m-Y');
    edit_room($name_room,$room_type_id,$room_status,$id);
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=room');
    die();
}
