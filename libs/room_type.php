<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (room_types)
function list_all_roomType()
{
    return listAll('room_types');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_roomType($id, $value)
{
    return listOne('room_types', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_roomType($name,$images,$description,$price,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'name_room_type' => $name,
        'images'=> $images,
        'description'=>$description,
        'room_price' => $price,     
        'created_at' => $created_at,
    ];
    var_dump($data);
    return insert('room_types', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_roomType($name,$images,$description,$price,$updated_at,$id)
{
    $updated_at = date('Y-m-d');
    $data = [
        'name_room_type' => $name,
        'images'=> $images,
        'description'=> $description,
        'room_price' => $price,
     
        'updated_at' => $updated_at,
    ];
    var_dump($data);
    return update('room_types', $data,'id',$id);
}
//Xóa dữ liệu trong bảng
function delete_roomType($id)
{
    delete('room_types','id',$id);
}

//Hiển thị sản phẩm theo danh mục
function list_product(){

}