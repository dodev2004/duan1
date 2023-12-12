<?php 
    function baiviet_select_all(){
        $sql = "SELECT * FROM  baiviet";
        return pdo_query($sql);
    }
    function baiviet_select_all_limit(){
        $sql = "SELECT * FROM  baiviet limit 3";
        return pdo_query($sql);
    }
    function baiviet_selelect_by_id($id){
        $sql = "SELECT * FROM baiviet where id_baiViet = ?";
        return pdo_query_one($sql,$id);

    }
    function baiviet_insert($title,$avatar,$meta_description,$content,$tieude_baiviet,$id_user){
        $sql = "INSERT INTO baiviet(title,avatar,content,meta_description,tieude_baiviet,created_time,last_update,id_user) VALUES(?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$title,$avatar,$content,$meta_description,$tieude_baiviet,date('Y-m-d H:i:s',time()),date('Y-m-d H:i:s',time()),$id_user);
        
    }
    function baiviet_update($id_BaiViet,$title,$avatar,$meta_description,$content,$tieude_baiviet){
        if($avatar){
            $sql = "UPDATE baiviet set title=?,avatar = ?,meta_description=?,content=?,tieude_baiviet=?,last_update=? WHERE id_BaiViet = ?";
        }
        else {
            $sql = "UPDATE baiviet set title=?,meta_description=?,content=?,tieude_baiviet=?,last_update=? WHERE id_BaiViet = ?";
        }
        pdo_execute($sql,$title,$meta_description,$content,$tieude_baiviet,date("Y-m-d H:i:s",time()),$id_BaiViet);

    }
    function baiviet_delete($id_BaiViet){
        $sql = "DELETE FROM baiviet WHERE id_BaiViet = ?";
        pdo_execute($sql,$id_BaiViet);
    }
    function baiviet_select_all_Pagin($currentPage)
{
    $offset = ($currentPage - 1) * 4;
    if (isset($_POST["seach"])) {
        $seach_Tenphong = !empty($_POST["seach_Tenphong"]) ? $_POST["seach_Tenphong"] : "";
        $id_LoaiPhong = !empty($_POST["seach_idLoaiPhong"]) ? $_POST["seach_idLoaiPhong"] : "";

        if (trim($seach_Tenphong) == "" && trim($id_LoaiPhong) == "") {
            $sql = "SELECT * FROM phong order by id desc  limit 4 offset $offset";
        } else if (trim($seach_Tenphong) != "" && trim($id_LoaiPhong) == "") {
            $sql = "SELECT * FROM phong where ten_Phong like '%" . $seach_Tenphong . "%' order by id desc limit 4 offset $offset";
        } else if (trim($seach_Tenphong) == "" && trim($id_LoaiPhong) != "") {
            $sql = "SELECT * FROM phong where id_loaiPhong  = $id_LoaiPhong order by id desc limit 4 offset $offset";
        } else {
            $sql = "SELECT * FROM phong where id_loaiPhong =  $id_LoaiPhong AND " . "ten_Phong like '%" .  $seach_Tenphong . "%' order by id desc limit 4 offset $offset";
        }
    } else {
        $sql = "SELECT * FROM baiviet order by id_BaiViet desc limit 4 offset $offset";
    }
    return pdo_query($sql);
}


?>