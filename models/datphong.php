<?php
function book_select_by_id_Phong($id)
{
    $sql = "SELECT check_in,check_out from book where id_Phong = $id and status != 4 AND status != 5";
    return pdo_query($sql);
}
function book_insert($id_user, $book_name, $sdt, $id_Phong, $sl_NgoiLon, $sl_tre_em, $check_in, $check_out, $price,$ptt)
{
    $sql = "INSERT INTO book(book_name,sdt,sl_NguoiLon,sl_tre_em,check_in,check_out,price,iduser,id_Phong,created_time,ptt) values(?,?,?,?,?,?,?,?,?,?,?) ";
    return pdo_execute($sql, $book_name, $sdt, $sl_NgoiLon, $sl_tre_em, $check_in, $check_out, $price, $id_user, $id_Phong, date('Y-m-d', time()),$ptt);
}

function book_select_by_id($id)
{
    $sql = "select * from book where id = ?";
    return pdo_query_one($sql, $id);
}
function book_change_status_bl($status, $id)
{
    $sql = "UPDATE book set ttBl = ? where id = ?";
    pdo_execute($sql, $status, $id);
}
function book_select_all_by_user($id_user)
{
    $sql = "SELECT  * from book where iduser =?   ";
    return pdo_query($sql, $id_user);
}
function book_select_by_stt_xndp()
{
    $sql = "SELECT * from book where status = 1";
    return pdo_query($sql);
}
function book_select_by_stt_xntt()
{
    $sql = "SELECT * from book where status  = 2";
    return pdo_query($sql);
}

function book_select_all($status = false)
{
    if ($status) {
        $sql = "select * from book where status = $status";
    } else {
        $sql = "select * from book";
    }

    return pdo_query($sql);
}
function book_change_status($status, $id)
{
    $sql = "UPDATE book set status = ? where id = ?";
    pdo_execute($sql, $status, $id);
}
function db_book_select_all_Pagin($currentPage, $status = false)
{
    $offset = ($currentPage - 1) * 4;
    if ($status) {
        $sql = "SELECT * FROM book where status = $status order by id desc limit 4 offset $offset";
    } else {
        $sql = "SELECT * FROM book order by id desc limit 4 offset $offset";
    }

    return pdo_query($sql);
}
function get_paging_book($pagin, $page, $act)
{
    $current = $_GET["currentPage"];
    if ($current > 3) {

        echo "<a  href=?act=$act&page=$page&currentPage=1>Fisrt</a>";
    }
    if ($current > 1) {
        echo "<a  href=?act=$act&page=$page&currentPage=" . $current - 1  . ">Prev</a>";
    }
    for ($num = 1; $num <= $pagin; $num++) {
        if ($num == $current) {
            echo "<a style='background:#192A3E;color:white' href=?act=$act&page=$page&currentPage=" . $num . ">$num</a>";
        } else {
            if ($num > $current - 3 && $num < $current + 3) {

                echo "<a  href=?act=$act&page=$page&currentPage=" . $num . ">$num</a>";
            }
        }
    }
    if ($current < $pagin) {
        echo "<a  href=?act=$act&page=$page&currentPage=" . $current + 1  . ">Next</a>";
        echo "<a  href=?act=$act&page=$page&currentPage=" . $pagin . ">Last</a>";
    }
}
// function book_insert_momo($id_user, $book_name, $sdt, $id_Phong, $sl_NgoiLon, $sl_tre_em, $check_in, $check_out, $price, $status)
// {
//     $sql = "INSERT INTO book(book_name,sdt,sl_NguoiLon,sl_tre_em,check_in,check_out,price,iduser,id_Phong,status,created_time) values(?,?,?,?,?,?,?,?,?,?,?) ";
//     return pdo_execute($sql, $id_user, $book_name, $sdt, $id_Phong, $sl_NgoiLon, $sl_tre_em, $check_in, $check_out, $price, $status, date('Y-m-d', time()));
// }