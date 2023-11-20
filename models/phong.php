<?php 
    function db_phong_insert($name,$loaiphong,$dientich,$giaphong,$slp,$slNguoiLon,$slTreEm,$avatar,$introduction,$description){
        $sql = "INSERT INTO phong(ten_Phong,id_loaiPhong,avatar,slNguoiLon,slTreEm,dientich,sl_Phong,gia,mota_chung,mota_chinh) values(?,?,?,?,?,?,?,?,?,?)";
      return pdo_execute($sql,$name,$loaiphong,$avatar,$slNguoiLon,$slTreEm,$dientich,$slp,$giaphong,$introduction,$description);
        
    }
    function db_phong_select_all(){
        if(isset($_POST["seach"])){
            $seach_Tenphong = !empty($_POST["seach_Tenphong"]) ? $_POST["seach_Tenphong"]: "";
            $id_LoaiPhong = !empty($_POST["seach_idLoaiPhong"]) ? $_POST["seach_idLoaiPhong"] : "";
          
            if(trim( $seach_Tenphong) == "" && trim($id_LoaiPhong)==""){
                $sql = "SELECT * FROM phong order by id desc ";
            }
            else if(trim( $seach_Tenphong) != "" && trim($id_LoaiPhong)==""){
                $sql = "SELECT * FROM phong where ten_Phong like '%". $seach_Tenphong."%' order by id desc" ; 
            }
            else if(trim( $seach_Tenphong) == "" && trim($id_LoaiPhong) !=""){
                $sql = "SELECT * FROM phong where id_loaiPhong  = $id_LoaiPhong order by id desc";
            }
            else {
                $sql = "SELECT * FROM phong where id_loaiPhong =  $id_LoaiPhong AND " . "ten_Phong like '%" .  $seach_Tenphong ."%' order by id desc";
            }
        }
        else {
            $sql = "SELECT * FROM phong order by id desc";
        }
        return pdo_query($sql);
    }
    function db_phong_select_all_Pagin($currentPage){
        $offset = ($currentPage - 1)*4;
        if(isset($_POST["seach"])){
            $seach_Tenphong = !empty($_POST["seach_Tenphong"]) ? $_POST["seach_Tenphong"]: "";
            $id_LoaiPhong = !empty($_POST["seach_idLoaiPhong"]) ? $_POST["seach_idLoaiPhong"] : "";
          
            if(trim( $seach_Tenphong) == "" && trim($id_LoaiPhong)==""){
                $sql = "SELECT * FROM phong order by id desc  limit 4 offset $offset";
            }
            else if(trim( $seach_Tenphong) != "" && trim($id_LoaiPhong)==""){
                $sql = "SELECT * FROM phong where ten_Phong like '%". $seach_Tenphong."%' order by id desc limit 4 offset $offset" ; 
            }
            else if(trim( $seach_Tenphong) == "" && trim($id_LoaiPhong) !=""){
                $sql = "SELECT * FROM phong where id_loaiPhong  = $id_LoaiPhong order by id desc limit 4 offset $offset";
            }
            else {
                $sql = "SELECT * FROM phong where id_loaiPhong =  $id_LoaiPhong AND " . "ten_Phong like '%" .  $seach_Tenphong ."%' order by id desc limit 4 offset $offset";
            }
        }
        else {
            $sql = "SELECT * FROM phong order by id desc limit 4 offset $offset";
        }
        return pdo_query($sql);
    }
    function db_phong_update($name,$loaiphong,$dientich,$giaphong,$slp,$slNguoiLon,$slTreEm,$avatar,$introduction,$description){
        $sql = "update phong set ten_Phong = ?, id_loaiPhong =?, avatar = ?, slNguoiLon = ?,slTreEm = ?,dientich= ?,slPhong= ?,gia= ?,mota_chung = ?, mota_chinhg =? where id = ?";
        pdo_execute($sql,$name,$loaiphong,$avatar,$slNguoiLon,$slTreEm,$dientich,$slp,$giaphong,$introduction,$description);
    }
    function db_phong_select_by_id($id){
        $sql = "select * from phong where id = ?";
        return pdo_query_one($sql,$id);
    }
    function db_phong_insert_images($images,$id_Phong){
       foreach($images as $image){
        $sql  = "insert into anhphong(Image,id_Phong) values(?,?)";
        pdo_execute($sql,$image,$id_Phong);
       }
       
    }
    function db_phong_delete_image($id){
        $sql= "delete from anhphong where id = ?";
        pdo_execute($sql,$id);
    }
    function db_phong_select_all_images_by_id($id){
        $sql = "select * from anhphong where id_Phong = ?";
        return pdo_query($sql,$id);
    }
    function db_phong_insert_dichvu_phong($tienNghi,$id_Phong){
       foreach($tienNghi as $id){
        $sql = "insert into dichvuphong(id_phong,id_dichvu) values(?,?)";
        pdo_execute($sql,$id_Phong,$id);
       }
    }
    function db_phong_select_id_dichvu($id){
        $sql = "SELECT * from dichvuphong where id_phong = ? ";
        return pdo_query($sql,$id);
    }
    function db_phong_delete($id){
        $sql = "delete from phong where id = ?";
        pdo_execute($sql,$id);
    }
    function get_paging($pagin){
        $current = $_GET["currentPage"];
        if($current > 3){
          
            echo "<a  href=?act=lk&page=phong&currentPage=1>Fisrt</a>";
        }
        if($current >1){
            echo "<a  href=?act=lk&page=phong&currentPage=". $current -1  .">Prev</a>";
        }
        for($num = 1 ; $num<=$pagin;$num++){
            if($num==$current){
                echo "<a style='background:#192A3E;color:white' href=?act=lk&page=phong&currentPage=".$num .">$num</a>";
            }
            else {
                if($num > $current -3 && $num < $current + 3 ){
                
                    echo "<a  href=?act=lk&page=phong&currentPage=".$num .">$num</a>";
                }
            }
            
        }
        if($current <$pagin ){
            echo "<a  href=?act=lk&page=phong&currentPage=". $current +1  .">Next</a>";
            echo "<a  href=?act=lk&page=phong&currentPage=". $pagin .">Last</a>";
        }
    
    }
?>