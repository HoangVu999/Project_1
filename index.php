<?php
session_start();
require_once "libs/room_type.php";
require_once "libs/room.php";
require_once 'config/config.php';
require_once 'libs/users.php';
require_once 'libs/comments.php';
require_once 'libs/slider.php';
$dolar = insert_room(2,2,1,1,1);
//Nếu đã đăng nhập rồi thì check_session
extract($_REQUEST);
//if (isset($btndangnhap)) {
//    if (check_user($username)) {
//        //Trong trường hợp username tồn tại thì lấy ra dữ liệu
//        $user = check_user($username);
//        if (password_verify($password, $user['password'])) {
//            $_SESSION['user'] = $user;
//            header('location:' . $_SERVER['REQUEST_URI']);
//            die();
//        } else {
//            $error['password'] = "Mật khẩu không đúng!";
//        }
//    } else {
//        $error['username'] = "Username không đúng";
//    }
//}
$page = isset($_GET['page']) ? $_GET['page'] : '';

//$pro_list_one = list_one_product($id);
switch ($page) {
    case '':
    case 'home':
        $view_page = "layout/home.php";
        break;
    case 'category':
        $view_page = "layout/category.php";
        break;
    case 'product':
        $product = list_one_product($id);
        $title = $product['name'];
        $view_page = "layout/product.php";
        break;
    case 'logout':
        unset($_SESSION['user']);
        header('location:' . ROOT);
        die;
        break;
    default:
        $view_page = "site/404.php";
        break;
}
include_once "layout/layout.php";
?>

