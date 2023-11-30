<?php
function db_lp_Select_all()
{
    $sql = "SELECT * FROM danhmuc ";
    return pdo_query($sql);
}
function db_lp_insert($name)
{
    $sql = "INSERT INTO danhmuc(ten_LoaiPhong) VALUES (?)";
    pdo_execute($sql, $name);
}
function db_lp_update($id, $name)
{
    $sql = "UPDATE danhmuc set ten_LoaiPhong = ? where id_LoaiPhong = ?";
    pdo_execute($sql, $name, $id);
}
function db_lp_delete($id)
{
    if (is_array($id)) {
        foreach ($id as $rm) {
            $sql = "DELETE FROM danhmuc where id_LoaiPhong = ? ";
            pdo_query($sql, $rm);
        }
    } else {
        $sql = "DELETE FROM danhmuc where id_LoaiPhong = ? ";
        pdo_query($sql, $id);
    }
}
function db_lp_Select_by_id($id)
{
    $sql  = "select * from danhmuc where id_LoaiPhong = ? ";
    return pdo_query_one($sql, $id);
}
