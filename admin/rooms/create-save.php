<?php
session_start();
require_once "../../libs/room.php";
require_once "../../config/config.php";

if(isset($_POST['btnsave'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['images']['size'] > 0){
        $okUpload = true;
        $images = uniqid().$_FILES['images']['name'];
    }else{
        $images = '';
    }
    insert_room($room_type_id,$images,$room_price,$room_number,$room_description,$room_status);
    if($okUpload){
        move_uploaded_file($_FILES['images']['tmp_name'],'../../images/' . $images);
    }
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=room');
    die();
}
?>

