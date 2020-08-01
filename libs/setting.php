<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (room_types)
function list_all_setting()
{
    return listAll('setting');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_setting($id)
{
    return listOne('setting','id', $id);
}

//thêm dữ liệu vào bảng
function insert_setting($name_web,$logo,$link_website,$email,$slogan,$address,$phone,$note)
{
   
    $data = [
        'name_web' => $name_web,
        'logo' => $logo,
        'link_website' => $link_website,
        'email' => $email,
        'slogan'=> $slogan,
        'address'=> $address,
        'phone'=>$phone,
        'note'=> $note
    ];
    return insert('setting', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_setting($name_web,$logo,$link_website,$email,$slogan,$address,$phone,$note,$id)
{
    
    $data = [
        'name_web' => $name_web,
        'logo' => $logo,
        'link_website' => $link_website,
        'email' => $email,
        'slogan'=> $slogan,
        'address'=> $address,
        'phone'=>$phone,
        'note'=> $note
    ];
    var_dump($data);
    return update('setting', $data,'id',$id);
}
//Xóa dữ liệu trong bảng
function delete_setting($id)
{
    delete('setting','id',$id);
}

