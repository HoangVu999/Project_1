<?php
session_start();
require_once '../../libs/new.php';
require_once '../../config/config.php';

if(isset($_POST['btnsave'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['news_image']['size'] > 0){
        $okUpload = true;
        $news_image = uniqid().$_FILES['news_image']['name'];
    }else{
        $news_image = '';
    }
    $date = date('Y-m-d');
    insert_new($news_name,$news_image,$news_description,$news_content,$date);
    if($okUpload){
        move_uploaded_file($_FILES['news_image']['tmp_name'],'../../images/' . $news_image);
    }
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=new');
    die();
}
?>


