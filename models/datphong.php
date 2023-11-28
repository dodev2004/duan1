<?php 
    function book_select_by_id_Phong($id){
        $sql = "SELECT check_in,check_out from book where id_Phong = $id";
        return pdo_query($sql);
    }
    function book_insert($id_user,$book_name,$sdt,$id_Phong,$sl_NgoiLon,$sl_tre_em,$check_in,$check_out,$price){
       $sql = "INSERT INTO book(book_name,sdt,sl_NguoiLon,sl_tre_em,check_in,check_out,price,iduser,id_Phong) values(?,?,?,?,?,?,?,?,?) ";
       return pdo_execute($sql,$book_name,$sdt,$sl_NgoiLon,$sl_tre_em,$check_in,$check_out,$price,$id_user,$id_Phong);
    }
    function book_select_by_id($id){
        $sql = "select * from book where id = ?";
        return pdo_query_one($sql,$id);
    }
?>