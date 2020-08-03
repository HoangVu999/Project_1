<?php
session_start();
require_once '../../libs/room_type.php';
require_once '../../config/config.php';
require_once '../../libs/database.php';
if(isset($_POST['btnsave'])){
    
    extract($_REQUEST);
  
    $okUpload=false;
    if($_FILES['images']['size']>0){
        $okUpload=true;
        $images=uniqid(). $_FILES['images']['name'];
    } else {
        $images='';
    }
    $date = date('Y-m-d');
    insert_roomType($name_room_type,$images,$description,$price,$date);
    if ($okUpload){
        move_uploaded_file($_FILES['images']['tmp_name'],'../../images/'.$images);
    }
    $_SESSION['message']="thêm dữ liệu thành công";
   header('Location:'. ROOT.'admin/?page=room_type');
    die;
}
?>


