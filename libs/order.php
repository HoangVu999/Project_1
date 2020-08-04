<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (room_types)
function list_all_order()
{
    $sql = "SELECT 
    o.id as id, 
    u.username as username,
    u.phone as userphone,
    u.email useremail,
    order_adult_number,
    order_child_number, 
    order_booking_day,
    order_start_day,
    order_end_day,
    order_sum_price,
    order_status
    FROM orders o INNER JOIN users u ON o.user_id=u.id 
    Order by id DESC";
    return query($sql);
    // return listAll('order');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_order($id, $value)
{
    return listOne('orders', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_order($news_name,$news_image,$news_description,$news_content,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'news_name' => $news_name,
        'news_image' => $news_image,
        'news_description' => $news_description,
        'news_content' => $news_content,
//        'news_view' => $news_view,
        'created_at' => $created_at,
    ];
    return insert('orders', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_order($news_name,$news_image,$news_description,$news_content,$updated_at,$id_value)
{
    $updated_at = date('Y-m-d');
    $data = [
        'news_name' => $news_name,
        'news_image' => $news_image,
        'news_description' => $news_description,
        'news_content' => $news_content,
        'updated_at' => $updated_at,
    ];
    return update('orders', $data,'id',$id_value);
}
//Xóa dữ liệu trong bảng
function delete_order($id)
{
    delete('orders','id',$id);
}

//Hiển thị sản phẩm theo danh mục
//function list_product(){
//
//}
