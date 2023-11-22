<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../models/pdo.php";
include "../models/loaiphong.php";
include "../models/phong.php";
include "../models/dichvu.php";
include "../models/thanhvien.php";
include "../view/user/header.php";
// include "../view/user/phongchitiet.php";
// include "../view/user/dangnhap.php";
// include "../view/user/quanlyphong.php";
// include "../view/user/phong.php";
// include "../view/user/trangchu.php";
if (isset($_GET["act"])  && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangnhap':
            $eror = [
                "username" => "",
                "password" => ""
            ];
            if (isset($_POST["dangnhap"])) {
                $user = $_POST["username"];
                $password = $_POST["password"];
                $checked = nguoidung_signin($user, $password);
                if (is_array($checked)) {
                    $_SESSION["user"] = $checked;

                    header("Location: user.php");
                } else {
                    $eror["password"] = "Thông tin đăng nhập sai";
                    $eror["username"] = "Thông tin đăng nhập sai";
                }
            }
            include "../view/user/dangnhap.php";
            break;
        case 'dangky':
            $eror = "";
            if (isset($_POST['dangky'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $countemail = db_column_user_exist($email, 'email');
                var_dump($email);
                var_dump($countemail);
                if ($countemail) {
                    $eror  = "Email đã được sử dụng ";
                } else {
                    echo "<script language=javascript>alert('Đăng ký thành công')</script>";
                    nguoidung_insert($name, $username, $email, $password, date('Y/m/d', time()), date('Y/m/d', time()));
                    header("Location: user.php?act=dangnhap");
                }
            }
            include "../view/user/dangky.php";
            break;
        case 'dangxuat':
            dangxuat();     
            header("location: user.php");
            // include "../view/user/dangnhap.php";

            break;
    }
} else {
    include "../view/user/trangchu.php";
}
include "../view/user/footer.php";
