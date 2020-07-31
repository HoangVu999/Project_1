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
function insert_roomType($name,$price,$price_sale,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'name_room_type' => $name,
        'room_price' => $price,
        'room_price_sale' => $price_sale,
        'created_at' => $created_at,
    ];
    return insert('room_types', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_roomType($name,$price,$price_sale,$updated_at,$id_value)
{
    $updated_at = date('Y-m-d');
    $data = [
        'name_room_type' => $name,
        'room_price' => $price,
        'room_price_sale' => $price_sale,
        'updated_at' => $updated_at,
    ];
    return update('room_types', $data,'id',$id_value);
}
//Xóa dữ liệu trong bảng
function delete_roomType($id)
{
    delete('room_types','id',$id);
}

//Hiển thị sản phẩm theo danh mục
function list_product(){

}