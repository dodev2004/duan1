<?php 
require '../carbon/vendor/autoload.php';
use Carbon\Carbon;
$now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
$sql_lk_dh = "SELECT * from book where id = $id ";
$lk_dh = pdo_query_one($sql_lk_dh);
$sql_tk = "SELECT * from thongke where ngaydat = '$now'";
$tk = pdo_query_one($sql_tk);
$slDatphong = 1;
$doanthu = $lk_dh["price"];
if(!(is_array($tk))){
    $sql = "INSERT INTO thongke (doanhthu,soluongdatphong,ngaydat) VALUES ('$doanthu','$slDatphong','$now')";
    pdo_execute($sql);
}
else {
    $slDatphong = $tk["soluongdatphong"] + $slDatphong;
    $doanthu = $tk["doanhthu"] + $doanthu;
    $sql = "UPDATE thongke set doanhthu = '$doanthu', soluongdatphong = '$slDatphong' where ngaydat = '$now'";
    pdo_execute($sql);
}

?>