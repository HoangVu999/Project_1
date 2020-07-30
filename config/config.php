<?php

define('ROOT', 'http://localhost/Project_1/');
define('TABLE_CATEGORY', 'room_types');
define('TABLE_PRODUCT', 'rooms');
define('TABLE_COMMENT', 'comments');
define('TABLE_USER', 'users');

//kiểm tra session có tồn tại chưa
//Nếu tồn tại rồi vào trang quản trị
function check_session()
{
    if (isset($_SESSION['user'])) {
        header('Location:' . ROOT . 'admin');
        die();
    }
    return;
}

//Kiểm tra quyển vào admin
function check_role()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['role'] == 1) {
            return;
        }
        if($_SESSION['user']['role'] == 0){
            header('Location:' . ROOT);
            die();
        }
    }
    //Trường hợp ngưởi dùng chưa đăng nhập
    header('Location:' . ROOT . 'admin/login.php');
    die();
}

//Kiểm tra người dùng đã đăng nhập chưa
function check_account(){
    if(isset($_SESSION['user'])){
        return true;
    }
    return false;
}
?>