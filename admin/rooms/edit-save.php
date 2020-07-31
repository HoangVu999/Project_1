<?php
session_start();
//Thêm kết nối database
require_once "../../libs/room.php";
require_once "../../config/config.php";
if (isset($_POST['btn-save-rooms'])) {
    extract($_REQUEST);
    //Gán thư mục lưu ảnh
    $dir = "../../images/";
    //Đặt biến kiểm tra xem người dùng có upload ảnh không
    $okUpload = false;
    if ($_FILES['images']['size'] > 0) {
        $okUpload = true;
        $images = $_FILES['images']['name'];
    } else {
        $images = isset($_POST['hinh']) ? $_POST['hinh'] : '';
    }
    $status = (isset($status)) ? true : false;
    $date = date('d-m-Y');

    if (edit_room($room_type_id,$images,$room_number,$room_description,$room_status,$id)) {
        if ($okUpload) {
            move_uploaded_file($_FILES['images']['tmp_name'], $dir . $images);
        }
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";
        header("location:" . ROOT . "admin/?page=room");
        
    }
}
