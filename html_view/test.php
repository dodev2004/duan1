<?php
 include "../models/pdo.php";
// Mảng PHP
$phpArray = array(["checkin" => 12],["a"]);
$sql = "SELECT check_in,check_out from book where id_Phong = 17";
$rs = pdo_query($sql);


// Chuyển mảng PHP thành một chuỗi JSON
$jsonArray = json_encode($rs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JS</title>
</head>
<body>
   
    <input type="date" name="check_in">
    <input type="date" name="check_out" >
<!-- Sử dụng một thẻ <script> để đặt dữ liệu JSON trong một biến JavaScript -->
<script>
    const inputCheckIn  = document.querySelector("input[name=check_in]");
    const inputCheckOut = document.querySelector("input[name=check_out]");
    var times = <?php echo $jsonArray; ?>;
    let checked = true;
    inputCheckOut.onblur = function(){
        var timeCheckin = new Date(inputCheckIn.value).getTime();
        var timeCheckout = new Date(inputCheckOut.value).getTime();
        var distance = timeCheckout - timeCheckin;
        console.log(distance)
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const months = Math.floor(days / 30);
                            const years = Math.floor(months / 12);
                         
        
    
}
    // Kiểm tra xem dữ liệu đã được chuyển thành công hay không
  
  
    
</script>

</body>
</html>