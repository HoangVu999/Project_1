<?php
session_start();
//Thêm kết nối database
require_once "../../libs/setting.php";
require_once "../../config/config.php";
if (isset($_POST['btn-save-setting'])) {
    extract($_REQUEST);
    //Gán thư mục lưu ảnh
    $dir = "../../images/";
    //Đặt biến kiểm tra xem người dùng có upload ảnh không
    $okUpload = false;
    if ($_FILES['logo']['size'] > 0) {
        $okUpload = true;
        $logo = $_FILES['logo']['name'];
    } else {
        $logo = isset($_POST['hinh']) ? $_POST['hinh'] : '';
    }
    

    if (update_setting($name_web,$logo,$link_website,$email,$slogan,$address,$phone,$note,$id)) {
        if ($okUpload) {
            move_uploaded_file($_FILES['logo']['tmp_name'], $dir . $logo);
        }
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";
        header("location:" . ROOT . "admin/?page=setting");
        
    }
}
