<?php 
require '../carbon/vendor/autoload.php';
use Carbon\Carbon;
require './pdo.php';
if(isset($_POST["time"])){
    $time = $_POST["time"];
}
else {
    $time = "";
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subDays(365)->toDateString();
}
if($time == "7ngay"){
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subDays(7)->toDateString();
  }
  else if($time == "14ngay"){
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subDays(14)->toDateString();
  }
  else if($time == "36ngay"){
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subDays(36)->toDateString();
  }
  else if($time == "365ngay"){
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subDays(36)->toDateString();
  }

$now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
$sql = "SELECT * from thongke where ngaydat BETWEEN  '$subdays' AND '$now' ORDER BY ngaydat ASC";
$result = pdo_query($sql);
foreach ($result as $row){
    $char_data[] = array(
        'date' => $row['ngaydat'],
        'sales' => $row['doanhthu'],
        'quantity' => $row["soluongdatphong"]
    );
}

echo $data = json_encode($char_data);
?>