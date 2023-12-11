<?php 
function thongke_sp_theodanhmuc(){
    $sql = "SELECT COUNT(phong.id_LoaiPhong) as tong, ten_LoaiPhong FROM `danhmuc`  INNER JOIN phong on danhmuc.id_LoaiPhong = phong.id_loaiPhong GROUP by danhmuc.id_LoaiPhong";
    return pdo_query($sql);
  }
function thongke_donhang_cho(){
    $sql = "SELECT  status , COUNT(status) as sl from book group by status";
    return pdo_query($sql);
}
function thongke_donhang_pttt(){
  $sql = "SELECT COUNT(ptt) as tong, ptt FROM book GROUP BY ptt";
  return pdo_query($sql);
}
function count_thong_ke_donhang(){
  $sql = "SELECT  COUNT(*) as tong FROM book";
  return pdo_query_one($sql);
}
function count_bl_thongke(){
  $sql= "SELECT COUNT(*) as tong from binhluan";
  return pdo_query_one($sql);
  
}
function rate_thongke_bl(){
  $sql = "SELECT COUNT(rate) as tong,rate from binhluan GROUP BY rate ORDER BY rate DESC";
  return pdo_query($sql);
}
function xh_phongdat(){
  $sql = "SELECT COUNT(id_Phong) as tong , id_Phong FROM `book` GROUP BY id_Phong ORDER BY COUNT(id_Phong) DESC";
  return pdo_query($sql);
}
?>