<?php
//Hàm kết nối đến cơ sở dữ liệu
function connection()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=project_1; charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "Lỗi kết nối đến cơ sở dữ liệu " . $e->getMessage();
    }
    return $conn;
}

//Hàm lấy toàn bộ dữ liệu của 1 bảng $table
function listAll($table)
{
    $conn = connection();
    try {
        $sql = "SELECT * FROM $table ORDER BY id ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi xử lý dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//Hàm lấy 1 dòng dữ liệu (1 bản ghi) trong bảng
//Theo điều kiện id ($id) và giá trị của nó ($value)
function listOne($table, $id, $value)
{
    $conn = connection();
    try {
        $sql = "SELECT * FROM $table WHERE $id=:$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$id", $value);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi không thể lấy dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//Hàm thêm vào 1 dòng dữ liệu trong bảng $table
//Dữ liệu là một mảng $data bao gồm có key và value
function insert($table, $data = array())
{
    $conn = connection();
    try {
        $sql = "INSERT INTO $table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key=:$key, ";
        }
        $sql = rtrim($sql, ", ");
//        var_dump($data);
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//Hàm cập nhật dữ liệu trong bảng $table
//Dữ liệu được cập là một mảng $data
//Có điều cập nhật theo id
function update($table, $data = array(), $id, $value_id)
{
    $conn = connection();
    try {
        $sql = "UPDATE $table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key=:$key, ";
        }
        $sql = rtrim($sql, ", ");
        $sql .= " WHERE $id=:$id";
        $data[$id] = $value_id; //Thêm key là id vào mảng data
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//Hàm xóa dữ liệu với bảng $table
//Có điều kiện là id với giá trị $value
function delete($table, $id, $value_id)
{
    $conn = connection();
    try {
        $sql = "DELETE FROM $table WHERE $id=:$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$id", $value_id);
        $result = $stmt->execute();
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}
//Phuong thức thục thi câu lệnh sql select
// trả về giá trị là bả ghi lấy được

function query($sql){
    $conn = connection();
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}

//câu lệnh câu lệnh có điều kiện
function query_where($table,$arry){
    $conn = connection();
    try {
        $sql = "SELECT * FROM $table WHERE $arry[0] $arry[1] :$arry[0] LIMIT 0,5";
        $stmt = $conn->prepare($sql);
        $data = [
            $arry [0] => $arry[1]
        ];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi dữ liệu " . $e->getMessage();
    } finally {
        unset($conn);
    }
    return $result;
}
