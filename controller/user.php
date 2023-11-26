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
            $eror = [
                "email" => "",
                "user_name" => "",
            ];

            if (isset($_POST['dangky'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $countemail = db_column_user_exist($email, 'email');
                $countname = db_column_user_exist($username, 'user_name');
                $eror["email"] = $countemail ? "Email đã tồn tại" : "";
                $eror["user_name"] = $countname ? "Tài khoản đã tồn tại" : "";
                if ($eror["email"] == "" && $eror["user_name"] == "") {
                    echo "<script language=javascript>alert('Đăng ký thành công')</script>";
                    nguoidung_insert($name, $username, $email, $password, date('Y/m/d', time()), date('Y/m/d', time()));
                    header("Location: user.php?act=dangnhap");
                }
            }
            include "../view/user/dangky.php";
            break;
        case 'taikhoan':
            $profile_user = nguoidung_select_by_id_user($_SESSION['user']["id"]);
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id-user'];
                $name = $_POST['name-user'];
                $email = $_POST['email-user'];
                $address = $_POST['address-user'];
                $sdt = $_POST['sdt-user'];
                nguoidung_update_user($id, $name, $email, $address, $sdt);
                header("Location: ?act=taikhoan");
            }
            include "../view/user/taikhoan.php";
            break;
        case 'doimatkhau':
            $pass_user = $_SESSION['user']["password"];
            // var_dump(md5(2222));
            // die();
            $eror = [
                "matkhau" => "",
                "matkhaucu" => "",
                "matkhaumoi" => ""
            ];
            if (isset($_POST['doimatkhau'])) {
                $id = $_POST['id-user'];
                $matkhaucu = md5($_POST['matkhaucu']);
                $matkhaumoi1 = $_POST['matkhaumoi1'];
                $matkhaumoi2 = $_POST['matkhaumoi2'];
                if ($matkhaucu == $pass_user) {

                    if ($matkhaumoi1 == $matkhaumoi2) {

                        $matkhaumoi = md5($matkhaumoi1);
                        nguoidung_update_password($id, $matkhaumoi);
                        $eror["matkhau"] = "Đổi mật khẩu thành công";
                    } else {
                        $eror["matkhaumoi"] = "Mật khẩu mới không trùng khớp";
                    }
                } else {
                    $eror["matkhaucu"] = "Mật khẩu cũ không chính xác";
                }
            }
            include "../view/user/doimatkhau.php";
            break;
        case 'thuvienanh':
            include "../view/user/thuvienanh.php";
            break;
        case 'quanlyphongdat':
            include "../view/user/quanlyphongdat.php";
            break;
        case 'phong':
            include "../view/user/phong.php";
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
