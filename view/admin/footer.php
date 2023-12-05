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
                
  
                  $(document).ready(function() {
                    thongke();
                  var char = new Morris.Area({
                      parseTime : false,
                      // ID of the element in which to draw the chart.
                      element: 'myfirstchart',
                      // Chart data records -- each entry in this array corresponds to a point on
                      // the chart.
                      // The name of the data record attribute that contains x-values.
                      xkey: 'date',
                      // A list of names of data record attributes that contain y-values.
                      ykeys: ['sales','quantity'],
                      // Labels for the ykeys -- will be displayed when you hover over the
                      // chart.
                      labels: ['Doanh thu', 'Số lượng đặt phòng']
                    });
                    $(".select_date").change(function(){
                      var time = $(this).val();
                      console.log(time);
                      if(time == "7ngay"){
                        var text   = "7 ngày qua";
                      }
                      else if(time == "14ngay"){
                        var text   = "14 ngày qua";
                      }
                      else if(time == "36ngay"){
                        var text   = "36 ngày qua";
                      }
                      else if(time == "90ngay"){
                        var text   = "90 ngày qua";
                      }
                      else {
                        var text = "365 ngày qua";
                      }
                      $.ajax({
                        url:"../models/thongke.php",
                        method:"POST",
                        dataType:"json",
                        data : {time : time},

                        success:function(data){
                          char.setData(data);
                          $("#date").text(text);
                        }
                     });

                    })
                    function thongke(){
                      var text = "365 ngày qua";  
                    
                     $.ajax({
                        url:"../models/thongke.php",
                        method:"POST",
                        dataType:"json",

                        success:function(data){
                          char.setData(data);
                          $("#date").text(text);
                        }
                     });
                    };

                  });
                </script>

                </body>

                </html>
                </body>

                </html>