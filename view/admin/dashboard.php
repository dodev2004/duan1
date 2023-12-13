<section class="admin-column_right">
<h1 style="color: #152C70;
  font-size: 30px;
  font-weight: bold;" class="admin_title">VietHotel</h1>
    <p>Thống kê doanh số theo : <span id="date"></span></p>
    <p>
        <select name="" class="select_date" id="">

            <option value="7ngay">7 ngày qua</option>
            <option value="14ngay">14 ngày qua</option>
            <option value="36ngay">36 ngày</option>
            <option value="90ngay">90 ngày</option>
            <option value="365ngay" selected>365 ngày qua</option>
        </select>
    </p>
    <div id="myfirstchart" style="height: 250px;">

    </div>
    <table style="margin-top: 20px; margin-bottom:20px">
        <p style="margin-top: 20px;">Bảng xếp hạng TOP 5 phòng được đặt nhiều nhất</p>
        <tr>
            <th>#</th>
            <th>Thông tin phòng</th>
            <th>Số lượng</th>
        </tr>
        <?php foreach($xhpd as $index => $value) : 
                $phong = db_phong_select_by_id($value["id_Phong"]);    
        ?>
        <tr>
            <th><?php echo $index + 1 ?></th>
            <th class="id"><?php echo $phong["ten_Phong"] ?></th>
            <th><?php echo $value["tong"] ?></th>

        </tr>
        <?php endforeach ?>



    </table>
    <div class="book_thongke">
        <div id="myChart" style="max-width:700px; height:400px"></div>
        <div><canvas id="donhang" style="width:100%;max-width:600px"></canvas></div>
        <div id="ptt" style="max-width: 700px; height:400px"></div>
        <div id="tkbl" style="max-width: 700px;height:400px"></div>
    </div>
   





</section>