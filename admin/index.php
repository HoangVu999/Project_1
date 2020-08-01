<?php
ob_start();
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : '';
require_once '../config/config.php';
require_once '../libs/room_type.php';
require_once '../libs/room.php';
include_once 'template/header.php';
//check_role();
switch ($page) {
    case '':
    case 'home':
        include_once 'home/home.php';
        break;
    case 'room_type':
        //Lấy hành động trong room_types
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện room_types
                include_once 'room_types/index.php';
                break;
            case 'add':
                include_once 'room_types/create.php';
                break;
            case 'edit':
                include_once 'room_types/edit.php';
                break;
        }
        break;
    case 'room':
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'rooms/index.php';
                break;
            case 'add':
                include_once 'rooms/create.php';
                break;
            case 'edit':
                include_once 'rooms/edit.php';
                break;
            case 'search':
                include_once 'rooms/search.php';
                break;
        }
        break;
    case 'new':
        //Lấy hành động trong room_types
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện room_types
                include_once 'new/index.php';
                break;
            case 'add':
                include_once 'new/create.php';
                break;
            case 'edit':
                include_once 'new/edit.php';
                break;
        }
        break;

    case 'user':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'users/index.php';
                break;
            case 'add':
                include_once 'users/create.php';
                break;
            case 'edit':
                include_once 'users/edit.php';
                break;
        }
        break;
    case 'order':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'order/index.php';
                break;
            case 'add':
                include_once 'order/create.php';
                break;
            case 'edit':
                include_once 'order/edit.php';
                break;
        }
        break;
    case 'comment':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'comments/index.php';
                break;;
        }
        break;

    case 'logout':
        unset($_SESSION['user']);
        header('Location:' . ROOT . 'admin/login.php');
        die;
        break;
    default:
        echo '404 not found';
        break;
}
include_once 'template/footer.php';
if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
}
?>
<Script>
    $(document).ready(function(){
        $('#checkall').change(function(){
            $('input:checkbox').prop('checked',$(this).prop('checked'));
        })
        $('#btndel-category').click(function(){
            if ($('input:checked').length===0){
                alert ("Bạn cần chọn ít nhất một mục");
                return false;
            }
        })
    
    $('.status').change(function() {
            if ($(this).prop('checked')) {
                $('#span').html('Empty');
            } else {
                $('#span').html('Full');
            }
        })
    })
</Script>
<?php
ob_end_flush();
