                </section>
                </section>
                </section>
                </div>
                <footer>

                </footer>
                <script src="../../public/js/form.js"></script>
                <script src="../../public/js/admin/main.js"></script>
                <script>
                  validationForm("#form-roomtype");
                  validationForm("#form-room_service");
                  validationForm("#form-addmember");
                  uploadImgag("#form-room_service", "#room_avatar");
                  uploadImgag("#form-addroom", "#room_avatar", "#room_input-slider");
                </script>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
                <script>
                  if(document.getElementById("myfirstchart")){
                    $(document).ready(function() {
                    thongke();
                    var char = new Morris.Area({
                      parseTime: false,
                      // ID of the element in which to draw the chart.
                      element: 'myfirstchart',
                      // Chart data records -- each entry in this array corresponds to a point on
                      // the chart.
                      // The name of the data record attribute that contains x-values.
                      xkey: 'date',
                      // A list of names of data record attributes that contain y-values.
                      ykeys: ['sales', 'quantity'],
                      // Labels for the ykeys -- will be displayed when you hover over the
                      // chart.
                      labels: ['Doanh thu', 'Số lượng đặt phòng']
                    });
                    $(".select_date").change(function() {
                      var time = $(this).val();
                      console.log(time);
                      if (time == "7ngay") {
                        var text = "7 ngày qua";
                      } else if (time == "14ngay") {
                        var text = "14 ngày qua";
                      } else if (time == "36ngay") {
                        var text = "36 ngày qua";
                      } else if (time == "90ngay") {
                        var text = "90 ngày qua";
                      } else {
                        var text = "365 ngày qua";
                      }
                      $.ajax({
                        url: "../models/thongke.php",
                        method: "POST",
                        dataType: "json",
                        data: {
                          time: time
                        },

                        success: function(data) {
                          char.setData(data);
                          $("#date").text(text);
                        }
                      });

                    })

                    function thongke() {
                      var text = "365 ngày qua";

                      $.ajax({
                        url: "../models/thongke.php",
                        method: "POST",
                        dataType: "json",

                        success: function(data) {
                          char.setData(data);
                          $("#date").text(text);
                        }
                      });
                    };

                  });
                  }
                 
                </script>
                <script src="https://www.gstatic.com/charts/loader.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                <script>
                  if (document.getElementById("myChart")) {
                    google.charts.load('current', {
                      'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                      // Set Data
                      const data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Tổng số phòng'],
                        <?php
                        foreach ($tk as $index => $value) {
                          if ($index == count($tk) - 1) {
                            echo "['" . $value["ten_LoaiPhong"] . "'," . $value["tong"] . "]";
                          } else {
                            echo "['" . $value["ten_LoaiPhong"] . "'," . $value["tong"] . "],";
                          }
                        }

                        ?>

                      ]);

                      // Set Options
                      const options = {
                        title: 'Thống kê sản phẩm theo danh mục',
                        is3D: true
                      };

                      // Draw
                      const chart = new google.visualization.PieChart(document.getElementById('myChart'));

                      chart.draw(data, options);
                      document.getElementById("myChart").querySelector("rect").style.fill = "#f5f6f8";
                    }
                  }
                </script>
                <script>
                  if (document.getElementById("donhang")) {
                    const xValues = ["Chờ xác nhận", "Chờ thanh toán", "Chờ xác nhận nhận phòng", "Chờ xác nhận trả phòng"];
                    const yValues = [
                      <?php foreach ($dhcheck as $check) {
                        if ($check["status"] == 2) {
                          echo $check["sl"];
                        }
                      } ?>,
                      <?php foreach ($dhcheck as $check) {
                        if ($check["status"] == 3) {
                          echo $check["sl"];
                        }
                      } ?>,
                      <?php foreach ($dhcheck as $check) {
                        if ($check["status"] == 6) {
                          echo $check["sl"];
                        }
                      } ?>,
                      <?php foreach ($dhcheck as $check) {
                        if ($check["status"] == 3) {
                          echo $check["sl"];
                        }
                      } ?>,

                    ];
                    const barColors = [
                      "#b91d47",
                      "#00aba9",
                      "#2b5797",
                      "#e8c3b9",
                      "#1e7145"
                    ];
                    new Chart("donhang", {
                      type: "doughnut",
                      data: {
                        labels: xValues,
                        datasets: [{
                          backgroundColor: barColors,
                          data: yValues
                        }]
                      },
                      options: {
                        title: {
                          display: true,
                          text: "Thống kê đơn hàng cần được xử lý"
                        }
                      }
                    });
                  }
                </script>
                <script>
                  if (document.getElementById("ptt")) {
                    google.charts.load('current', {
                      'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                      // Set Data
                      const data = google.visualization.arrayToDataTable([
                        ['Phương thứcThanh toán', 'Phương thức thanh toán'],
                        <?php
                        foreach ($ptt as $index => $value) {
                          if ($index == count($ptt) - 1) {
                            if ($value["ptt"] == 1) {
                              echo "[ 'Thanh toán trực tuyến'," . $value["tong"] . "]";
                            } else {
                              echo "[ 'Thanh toán trực tiếp'," . $value["tong"] . "]";
                            }
                          } else {
                            if ($value["ptt"] == 1) {
                              echo "[ 'Thanh toán trực tuyến'," . $value["tong"] . "],";
                            } else {
                              echo "[ 'Thanh toán trực tiếp'," . $value["tong"] . "],";
                            }
                          }
                        }

                        ?>

                      ]);

                      // Set Options
                      const options = {
                        title: 'Thống kê phương thức thanh toán theo đơn hàng trên tổng số <?php echo $tongdh["tong"] ?>',
                        is3D: true
                      };

                      // Draw
                      const chart = new google.visualization.PieChart(document.getElementById('ptt'));

                      chart.draw(data, options);
                      document.getElementById("ptt").querySelector("rect").style.fill = "#f5f6f8";
                    }
                  }
                </script>
                <script>
                  if (document.getElementById("tkbl")) {
                    google.charts.load('current', {
                      'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                      // Set Data
                      const data = google.visualization.arrayToDataTable([
                        ['Đánh giá', 'Tổng theo đánh giá'],
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                          $check = false;
                          $current = 0 ;
                          foreach ($tkbl as $index => $value) {
                            if ($value["rate"] == $i) {
                              $check = true;
                              $current = $index;
                        
                            }
                          }
                          if ($check) {
                            echo "['$i sao' ," . $tkbl[$current]["tong"] . "],";
                          } else {
                            echo "['$i sao' ,0],";
                          }
                        }
                        ?>
                      ]);

                      // Set Options
                      const options = {
                        title: 'Thống kê phương thức thanh toán theo đơn hàng trên tổng số <?php echo $tongbl["tong"] ?>',
                        is3D: true
                      };

                      // Draw
                      const chart = new google.visualization.PieChart(document.getElementById('tkbl'));

                      chart.draw(data, options);
                      document.getElementById("tkbl").querySelector("rect").style.fill = "#f5f6f8";
                    }
                  }
                </script>
                </body>

                </html>
                </body>

                </html>