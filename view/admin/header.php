<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/reset.css">
    <link rel="stylesheet" href="../public/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script type="text/javascript" src="../ckfinder/ckfinder.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    b
</head>

<body style="background-color: #f5f6f8;">
    <div class="container">
        <section class="admin">
            <section class="admin-content">
                <section class="admin-row">
                    <section class="admin-colum_left">
                        <section class="column-left_content">
                            <h3 class="admin-name">
                                WellCome Dasbord
                            </h3>
                            <section class="admin-personal">
                                <section class="admin-personal_img">
                                    <img src="./img/th.jfif" alt="">
                                </section>
                                <section class="admin-personal_detail">
                                    <p class="detail_name">

                                    </p>
                                    <p class="detail_locator">Quản trị trang web</p>
                                </section>
                            </section>
                            <section>
                                <nav class="admin-component">
                                    <ul class="admin-component_list">
                                        <li class="admin-component_item">
                                            <a href="./admin.php">Thống kê</a>
                                        </li>
                                        <?php if (checkPrivileges("act=lk&page=loaiphong")) { ?>
                                            <li class="admin-component_item ">
                                                <a href="?act=lk&page=loaiphong">Loại phòng</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("act=lk&page=phong&currentPage=1")) { ?>
                                            <li class="admin-component_item ">
                                                <a href="?act=lk&page=phong&currentPage=1">Phòng</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("act=lk&page=tiennghi")) { ?>
                                            <li class="admin-component_item ">
                                                <a href="?act=lk&page=tiennghi">Dịch vụ</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("act=xndp&page=datphong&currentPage=1") || checkPrivileges("act=xntt&page=datphong&currentPage=1") || checkPrivileges("act=history&page=datphong&currentPage=1")) { ?>
                                            <li class="admin-component_item admin-component_todolist">
                                                <a href="?page=datphong">Đặt phòng
                                                    <i class="fa-solid fa-caret-right"></i>
                                                </a>
                                                <section class="todolist">
                                                    <?php if (checkPrivileges("act=xndp&page=datphong&currentPage=1")) { ?>
                                                        <a href="?act=xndp&page=datphong&currentPage=1">Xác nhận đặt phòng</a>
                                                    <?php } ?>
                                                    <?php if (checkPrivileges("act=xntt&page=datphong&currentPage=1")) { ?>
                                                        <a href="?act=xntt&page=datphong&currentPage=1">Xác nhận thanh toán</a>
                                                    <?php } ?>
                                                    <?php if (checkPrivileges("act=xntp&page=datphong&currentPage=1")) { ?>
                                                        <a href="?act=xntp&page=datphong&currentPage=1">Xác nhận trả phòng</a>
                                                    <?php } ?>
                                                    <?php if (checkPrivileges("act=history&page=datphong&currentPage=1")) { ?>
                                                        <a href="?act=history&page=datphong&currentPage=1">Lịch sử đặt phòng</a>
                                                    <?php } ?>
                                                </section>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("act=lk&page=bl&currentPage=1")) { ?>
                                            <li class="admin-component_item">
                                                <a href="?act=lk&page=bl&currentPage=1">Đánh giá</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("act=lk&page=thanhvien&currentPage=1")) { ?>
                                            <li class="admin-component_item ">
                                                <a href="?act=lk&page=thanhvien&currentPage=1">Thành viên</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (checkPrivileges("page=thongke")) { ?>
                                            <li class="admin-component_item">
                                                <a href="?page=thongke">Thống kê</a>
                                            </li>
                                        <?php } ?>

                                        <li class="admin-component_item">
                                            <a href="../index.php">Vào website</a>
                                        </li>

                                    </ul>

                                </nav>
                            </section>
                            <?php if (checkPrivileges("page=dangxuat")) { ?>
                                <a class="logout" href="?page=dangxuat">Đăng xuất</a>
                            <?php } ?>
                        </section>

                    </section>