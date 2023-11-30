<?php 
    function bl_select_all(){
        $sql = "SELECT * from binhluan ";
        return pdo_query($sql);
    }
    function bl_select_all_pagin($currentPage){
        $offset = ($currentPage - 1)*4;
        $sql = "SELECT * from binhluan order by id desc limit 4 offset $offset";
        return pdo_query($sql);
    }
    function bl_select_by_id($id){
        $sql = "SELECT * from binhluan where id = ?";
        return pdo_query_one($sql,$id);
    }
    function bl_select_by_id_Phong($id){
        $sql  = "SELECT * from binhluan where idphong = ? order by rate desc";
        return pdo_query($sql,$id);
    }
    function bl_delete($id){
        if(is_array($id)){
            foreach($id as $id_bl){
                $sql = "DELETE FROM binhluan WHERE id = ?";
                pdo_execute($sql,$id_bl);
            }
        }
        else {
            $sql = "DELETE FROM binhluan WHERE id =?";
            pdo_execute($sql,$id);
        }
       
    }
    function bl_insert($id_user,$id_Phong,$content,$rate,$ngaydang){
        $sql = "INSERT INTO binhluan(iduser,idphong,content,rate,ngaydang) VALUES(?,?,?,?,?)";
        pdo_execute($sql,$id_user,$id_Phong,$content,$rate,$ngaydang);
    }
    function bl_get_paging($pagin)
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

?>