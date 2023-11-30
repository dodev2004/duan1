<?php
function nguoidung_insert($ho_ten, $username, $email, $mat_khau, $ngaytao, $ngaysua)
{
    $mat_khau = md5($mat_khau);
    $sql = "INSERT INTO nguoidung(name,user_name,email, password,ngaytao,ngaysua) VALUES (?,?,?,?,?,?) ";
    pdo_execute($sql, $ho_ten, $username, $email, $mat_khau, $ngaytao, $ngaysua);
}
function nguoidung_update($ma_kh, $user,  $name, $email, $phone)
{
    $sql = "UPDATE nguoidung SET user_name=?,name=?,email=?,sdt=? WHERE id=?";
    pdo_execute($sql, $user, $name, $email, $phone, $ma_kh);
}
function nguoidung_update_user($ma_kh,  $name, $email, $address, $phone)
{
    $sql = "UPDATE nguoidung SET name=?,email=?,diachi=?,sdt=? WHERE id=?";
    pdo_execute($sql, $name, $email, $address, $phone, $ma_kh);
}
function nguoidung_update_admin($id, $name, $user_name, $password, $ngaysua)
{
    $sql = "UPDATE nguoidung SET name=?,user_name=?,password=?,ngaysua=? WHERE id=?";
    pdo_execute($sql, $name, $user_name, $password, $ngaysua, $id);
}
function nguoidung_select_all()
{
    if (isset($_POST["seach"])) {
        $seach_name = !empty($_POST["seach_name"]) ? $_POST["seach_name"] : "";
        $id_user = !empty($_POST["seach_iduser"]) ? $_POST["seach_iduser"] : "";

        if (trim($seach_name) == "" && trim($id_user) == "") {
            $sql = "SELECT * FROM phong order by id desc ";
        } else if (trim($seach_name) != "" && trim($id_user) == "") {
            $sql = "SELECT * FROM phong where name like '%" . $seach_name . "%' order by id desc";
        } else if (trim($seach_name) == "" && trim($id_user) != "") {
            $sql = "SELECT * FROM phong where id_user  = $id_user order by id desc";
        } else {
            $sql = "SELECT * FROM phong where id_user =  $id_user AND " . "name like '%" .  $seach_name . "%' order by id desc";
        }
    } else {

        $sql = "SELECT * FROM phong order by id desc";
    }
    return pdo_query($sql);
}

function nguoidung_select_all_Pagin($currentPage, $id)
{
    $offset = ($currentPage - 1) * 4;
    if (isset($_POST["seach"])) {
        $seach_name = !empty($_POST["seach_username"]) ? $_POST["seach_username"] : "";
        if (trim($seach_name) != "") {
            $sql = "SELECT * FROM nguoidung   where user_name like '%" . $seach_name . "%' order by id desc limit 4 offset $offset";
        } else {
            $sql = "SELECT * FROM nguoidung where id != $id order by id desc limit 4 offset $offset";
        }
    } else {
        $sql = "SELECT * FROM nguoidung where id != $id order by id desc limit 4 offset $offset";
    }
    return pdo_query($sql);
}


function nguoidung_delete($ma_kh)
{
    $sql = "DELETE FROM nguoidung  WHERE id=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}

function nguoidung_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM nguoidung WHERE id=?";
    return pdo_query_one($sql, $ma_kh);
}

function nguoidung_id_select_by_user_name($user_name)
{
    $sql = "SELECT id FROM nguoidung WHERE user_name=?";
    return pdo_query_one($sql, $user_name);
}
function nguoidung_signin($user, $password)
{
    $sql = "SELECT * from nguoidung where user_name = ? and password = ? ";
    return pdo_query_one($sql, $user, md5($password));
}
function nguoidung_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM nguoidung WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function db_column_user_exist($data, $comlumn)
{
    $sql = "SELECT count(*) FROM nguoidung WHERE $comlumn=?";
    return pdo_query_value($sql, $data) > 0;
}
function nguoidung_select_by_role($vai_tro)
{
    $sql = "SELECT * FROM nguoidung WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
function nguoidung_change_password($ma_kh, $mat_khau_moi)
{
    $sql = "UPDATE nguoidung SET password=? WHERE id=?";
    pdo_execute($sql, $ma_kh, $mat_khau_moi);
}
function thanhvien_get_paging($pagin)
{
    $current = $_GET["currentPage"];
    if ($current > 3) {

        echo "<a  href=?act=lk&page=thanhvien&currentPage=1>Fisrt</a>";
    }
    if ($current > 1) {
        echo "<a  href=?act=lk&page=thanhvien&currentPage=" . $current - 1  . ">Prev</a>";
    }
    for ($num = 1; $num <= $pagin; $num++) {
        if ($num == $current) {
            echo "<a style='background:#192A3E;color:white' href=?act=lk&page=thanhvien&currentPage=" . $num . ">$num</a>";
        } else {
            if ($num > $current - 3 && $num < $current + 3) {

                echo "<a  href=?act=lk&page=thanhvien&currentPage=" . $num . ">$num</a>";
            }
        }
    }
    if ($current < $pagin) {
        echo "<a  href=?act=lk&page=thanhvien&currentPage=" . $current + 1  . ">Next</a>";
        echo "<a  href=?act=lk&page=thanhvien&currentPage=" . $pagin . ">Last</a>";
    }
}
function dangxuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
function nguoidung_select_by_id_user($ma_kh)
{
    $sql = "SELECT * FROM nguoidung WHERE id=?";
    return pdo_query_one($sql, $ma_kh);
}
function nguoidung_update_password($ma_kh, $password)
{
    $sql = "UPDATE nguoidung SET password='" . $password . "' WHERE id='" . $ma_kh . "'";
    pdo_execute($sql);
}
function db_user_id_select_by_email($email)
{
    $sql = "SELECT id FROM nguoidung WHERE email=?";
    return pdo_query_one($sql, $email);
}
function db_user_change_password($ma_kh, $mat_khau_moi)
{
    $sql = "UPDATE nguoidung SET password=? WHERE id=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}
