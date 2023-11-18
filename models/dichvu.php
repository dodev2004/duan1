<?php
function db_dv_insert($name, $image)
{
    $sql  = "INSERT INTO dichvu(name,icon) values(?,?)";
    pdo_execute($sql, $name, $image);
}
function db_dv_select()
{
    $sql  = "SELECT * FROM dichvu";
    return pdo_query($sql);
}
function db_dv_select_by_id($id)
{
    $sql = "SELECT * from dichvu where id = ?";
    return pdo_query_one($sql, $id);
}
function db_dv_delete($id)
{
    if (is_array($id)) {
        foreach ($id as $id_dv) {
            $sql = "DELETE FROM dichvu where id = ?";
            pdo_execute($sql, $id_dv);
        }
    } else {
        $sql = "DELETE FROM dichvu WHERE id = ?";
        pdo_execute($sql, $id);
    }
}
function db_dv_update($id, $image, $name)
{
    $sql = "UPDATE dichvu SET name = ?, icon =? where id = ?";
    pdo_execute($sql, $name, $image, $id);
}