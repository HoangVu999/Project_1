<?php
require_once "database.php";

//Hiển thị toàn bộ danh sách sản phẩm bao gồm cả tên danh mục (Category name)
function list_all_room()
{
    $sql = "SELECT 
    p.id as id, 
    c.name_room_type as name_room_type,  
    c.images as image_room,
    room_price, 
    c.description as description_room,
    p.room_status as status_room
     
    FROM rooms p INNER JOIN room_types c ON p.room_type_id=c.id 
    Order by id DESC";
    return query($sql);
}
//Hàm lấy ra 1 bản ghi (dòng)
function list_one_product($id)
{
    return listOne('rooms', 'id', $id);
}
//thêm dữ liệu vào bảng
function insert_room($room_type_id,$room_status)
{
    
    $data = [
        'room_type_id' => $room_type_id,
        'room_status' => $room_status,
        
    ];
    
    return insert('rooms', $data);
    
}


//$cate_id, $name, ... dữ liệu để sửa
//$id_value giá trị điều kiện sửa sản phẩm theo id
function edit_room($room_type_id,$room_status,$id)
{
    
    $data = [
        'room_type_id' => $room_type_id,
        'room_status' => $room_status,
    ];
    var_dump($data);
    return update('rooms', $data, 'id', $id);
}

//Xóa dữ liệu trong bảng
function delete_room($id)
{
    delete('rooms','id',$id);
}

//hàm tìm kiếm sản phẩm
function search_rooms($name_room_type){
    $sql = "SELECT 
    p.id as id, 
    c.name_room_type as name_room_type,  
    c.images as image_room,
    room_price, 
    c.description as description_room,
    p.room_status as status_room
     
    FROM rooms p INNER JOIN room_types c ON p.room_type_id=c.id 
                WHERE p.name_room_type LIKE '%$name_room_type%'";
    return query($sql);
}

//Hiển thị danh sách sản phẩm có hạn chế
function list_limit_product($count){
    $sql =  "SELECT * FROM rooms ORDER BY id ASC LIMIT 0,10";
    return query($sql);
}
//Hiển thị danh sách sản phẩm có hạn chế
function product_top($count){
    $sql =  "SELECT * FROM rooms ORDER BY id DESC LIMIT 0,5";
    return query($sql);
}
//Hiển thị danh sách sản phẩm có hạn chế
function product_top_view($count){
    $sql =  "SELECT * FROM rooms ORDER BY view DESC LIMIT 0,5";
    return query($sql);
}
//Sản phảm giảm giá
function list_sale_product(){
    $arry = ['sale' , '>' , 0];
    return query_where('rooms',$arry);
}
//Hàm cập nhật lượng view
function update_view_product($id){
    $sql = "UPDATE rooms SET view=view+1 WHERE id=$id";
    $conn =  connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
//Lấy sản phẩm theo cate_id
//function showProduct_withCate_id(){
//    $sql = "SELECT pro.id AS i, cate_id, name, description, image, price, sale
//        FROM rooms as pro
//        INNER JOIN room_types as cate on pro.cate_id = cate.id
//        WHERE pro.cate_id=:cate_id
//        ORDER BY cate_id DESC";
//    $conn =  connection();
//    $stmt = $conn->prepare($sql);
//    $stmt->bindParam('cate_id',$id);
//}
