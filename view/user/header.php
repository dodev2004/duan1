<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="publicport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../public/style1.css">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="/style.css">




</head>

<body>
    <header>
        <div class="wrapper">
            <section class="header_bottom">
                <section class="header_bottom-content">
                    <section class="header_bottom-left">
                        <nav>
                            <li>
                                <a class="logo" href="">Logo</a>
                            </li>
                            <li> <a href="../controller/user.php">Trang chủ</a></li>
                            <li>
                                <a href="">Về chúng tôi</a>
                            </li>
                            <li class="list_room-item">
                                <a class="menu_room" href="?act=phong">Phòng <i class="fa-solid fa-angle-down"></i>

                                </a>
                                <nav class="todolist_room">
                                    <a href="">Phòng đơn</a><a href="">Phòng khách</a><a href="">Phòng Vip</a>
                                </nav>
                            </li>
                            <li> <a href="">Ẩm thực</a></li>
                            <li> <a href="">Dịch vụ</a></li>
                            <li> <a href="?act=thuvienanh">Thư viện ảnh</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </nav>
                    </section>
                    <nav>
                        <nav class="user_box">
                            <?php if (!isset($_SESSION["user"])) { ?>
                                <a href="?act=dangnhap" class="header_top-user">
                                    Đăng nhập
                                </a>
                            <?php } else { ?>
                                <li class="list_room-item">
                                    <a class="menu_room color_black" href="?act=taikhoan"> <i class="fa-solid fa-user icon_user"></i></a>
                                    <nav class="todolist_room">
                                        <a href="?act=dangxuat">Đăng xuất</a>
                                    </nav>
                                </li>
                            <?php } ?>
                        </nav>
                    </nav>
                </section>


            </section>
        </div>
    </header>