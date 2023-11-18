<?php 
    function db_phong_insert($name,$loaiphong,$dientich,$giaphong,$slp,$slNguoiLon,$slTreEm,$avatar,$introduction,$description){
        $sql = "INSERT INTO phong(ten_Phong,id_loaiPhong,avatar,slNguoiLon,slTreEm,dientich,slPhong,gia,mota_chung,mota_chinh) values(?,?,?,?,?,?,?,?,?,?)";

        pdo_execute($sql,$name,$loaiphong,$avatar,$slNguoiLon,$slTreEm,$dientich,$slp,$giaphong,$introduction,$description);
    }
    function db_phong_select_all(){
        $sql = "SELECT * from phong";
        return pdo_query($sql);
    }
    function db_phong_update($name,$loaiphong,$dientich,$giaphong,$slp,$slNguoiLon,$slTreEm,$avatar,$introduction,$description){
        $sql = "update phong set ten_Phong = ?, id_loaiPhong =?, avatar = ?, slNguoiLon = ?,slTreEm = ?,dientich= ?,slPhong= ?,gia= ?,mota_chung = ?, mota_chinhg =? where id = ?";
        pdo_execute($sql,$name,$loaiphong,$avatar,$slNguoiLon,$slTreEm,$dientich,$slp,$giaphong,$introduction,$description);
    }
    function db_phong_select_by_id($id){
        $sql = "select * from phong where id = ?";
        return pdo_query($sql,$id);
    }
?>