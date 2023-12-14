<main>
        <section class="my_hotel-task">
            <div class="wrapper">
                <a href="">Trang chủ</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="">Bài viết</a>

            </div>
          <div class="wrapper">
          <div>
               <h1><?php echo $baiviet["title"] ?></h1>
               <div class="content_new">
                <div class="content_new-timer">
                <span >Người đăng : VietHotel</span>
                <span>Ngày đăng : <?php echo $baiviet["created_time"] ?></span>
                </div>
                
                <?php echo $baiviet["content"] ?>
               </div>
               </div>
          </div>
        </section>
      


    </main>
    <script>
        var title = <?php echo $title ?>;
        var meta = JSON.stringify(<?php echo $meta_description ?>)
        console.log(meta)
       document.querySelector("head").querySelector("title").innerText = title;
       

    </script>