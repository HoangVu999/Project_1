<?php
session_start();
require_once '../../libs/room_type.php';
require_once '../../config/config.php';

if(isset($_POST['btn-edit'])){
    extract($_REQUEST);
    $dir = "../../images/";
    //Đặt biến kiểm tra xem người dùng có upload ảnh không
    $okUpload = false;
    if ($_FILES['images']['size'] > 0) {
        $okUpload = true;
        $images = $_FILES['images']['name'];
    } else {
        $images = isset($_POST['hinh']) ? $_POST['hinh'] : '';
    }
    
    $date = date('d-m-Y');

    if (update_roomType($name,$images,$description,$price,$date,$id)) {
        if ($okUpload) {
            move_uploaded_file($_FILES['images']['tmp_name'], $dir . $images);
        }
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";
        header("location:" . ROOT . "admin/?page=room_type");
        
    }
}
?>

