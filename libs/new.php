<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (room_types)
function list_all_new()
{
    return listAll('news');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_new($id, $value)
{
    return listOne('news', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_new($news_name,$news_image,$news_description,$news_content,$created_at)
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
    return insert('news', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_new($news_name,$news_image,$news_description,$news_content,$updated_at,$id_value)
{
    $updated_at = date('Y-m-d');
    $data = [
        'news_name' => $news_name,
        'news_image' => $news_image,
        'news_description' => $news_description,
        'news_content' => $news_content,
        'updated_at' => $updated_at,
    ];
    return update('news', $data,'id',$id_value);
}
//Xóa dữ liệu trong bảng
function delete_new($id)
{
    delete('news','id',$id);
}

//Hiển thị sản phẩm theo danh mục
//function list_product(){
//
//}
