<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "../models/pdo.php";
include "../models/datphong.php";
include "../models/loaiphong.php";

$dsdm = db_lp_Select_all();
include "../models/binhluan.php";
include "../models/phong.php";
include "../models/dichvu.php";
include "../models/thanhvien.php";
include "../view/user/header.php";
include "../global.php";
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

                    echo "<script language=javascript>
                    window.onload = function(){
                      sessionStorage.setItem('user','true');
                      window.location.href = 'user.php';
                    }
                    </script>";
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
        case 'quenmk':
            $eror = "";
            if (isset($_POST["submit"])) {

                $email = $_POST["email"];
                if (db_column_user_exist($email, 'email')) {
                    $ids = db_user_id_select_by_email($email);

                    header("Location:?act=mkmoi&id=" . $ids["id"]);
                } else {
                    $eror = "Email không tồn tại";
                }
            }
            include "../view/user/quenmatkhau.php";
            break;
        case 'phong':
            if (isset($_GET['idLoaiPhong']) && $_GET['idLoaiPhong'] > 0) {
                $id = $_GET['idLoaiPhong'];
                $dsphong = db_phong_select_by_id_user($id);
            } else {
                $id = 0;
                $dsphong = db_phong_select_all();
            }
            // var_dump($_GET['idLoaiPhong']);
            // die();
            include "../view/user/phong.php";
            break;
        case "phongchitiet":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET["id"];
                $rs = book_select_by_id_Phong($id);
                $bls = bl_select_by_id_Phong($id);
                $books = json_encode($rs);
                $phongchitiet = load_onephong($id);
                $phongcungloai = load_phong_cungloai($id, $phongchitiet["id_loaiPhong"]);
                $id_dv = db_phong_select_id_dichvu($id);
                // var_dump($id_dv[0]["id_dichVu"]);
                // die();
                // var_dump($dichvu);
                // die();
            }
            include "../view/user/phongchitiet.php";
            break;
        case 'xacnhanttdatphong':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id_Phong = $_POST["id_Phong"];
                $price = $_POST["price"];
                $name = $_POST["book_name"];
                $sdt  = $_POST["sdt"];
                $checkin = $_POST["check_in"];
                $checkout = $_POST["check_out"];
                $slNguoiLon = $_POST["sl_NguoiLon"];
                $sltreEm = $_POST["sl_tre_em"];
                $total_price = $_POST["total_price"];
            }
            include "../view/user/xacnhanttdatphong.php";
            break;
        case "billcomfirm":

            if (isset($_POST["xndatphongoff"])) {

                $id_Phong = $_POST["id_Phong"];
                // $price = $_POST["price"];
                $ptt = $_GET["ptt"];
                $name = $_POST["book_name"];
                $sdt  = $_POST["sdt"];
                $checkin = $_POST["check_in"];
                $checkout = $_POST["check_out"];
                $slNguoiLon = $_POST["sl_NguoiLon"];
                $sltreEm = $_POST["sl_tre_em"];
                $total_price = $_POST["total_price"];
                $id_user = $_SESSION["user"]["id"];
                $id = book_insert($id_user, $name, $sdt, $id_Phong, $slNguoiLon, $sltreEm, $checkin, $checkout, $total_price,$ptt);
                $bill = book_select_by_id($id);
                $room = db_phong_select_by_id($bill["id_Phong"]);
            } else {
                if (isset($_GET)) {
                    $ptt = $_GET["ptt"];
                    $id_user = $_SESSION["user"]["id"];
                    $id_Phong  = $_GET["orderInfo"];
                    $name = $_GET["name"];
                    $sdt  = $_GET["sdt"];
                    $checkin = $_GET["checkin"];
                    $checkout = $_GET["checkout"];
                    $slNguoiLon = $_GET["slNguoiLon"];
                    $sltreEm = $_GET["sltreEm"];
                    $total_price = $_GET["amount"];
                    $id = book_insert($id_user, $name, $sdt, $id_Phong, $slNguoiLon, $sltreEm, $checkin, $checkout, $total_price,$ptt);

                    // $id = book_insert_momo($id_user, $name, $sdt, $id_Phong, $slNguoiLon, $sltreEm, $checkin, $checkout, $total_price, $status, 3);
                    // $status = 3;
                    // $id =  book_insert_momo($id_user, $name, $sdt, $id_Phong,  $slNguoiLon,  $sltreEm, $checkin, $checkout,  $total_price, 3);
            
                    $bill = book_select_by_id($id);
                    $room = db_phong_select_by_id($bill["id_Phong"]);
                }
            }

            include "../view/user/billcomfirm.php";
            break;

        case "mkmoi":
            $eror = "";
            if (isset($_POST["submit"])) {
                // var_dump(md5(3333));
                // die();
                $password = $_POST["password"];
                $matkhaumoi = md5($password);
                $id = $_GET["id"];
                // var_dump(md5( $matkhaumoi));
                // die();
                db_user_change_password($id, $matkhaumoi);
                echo "<script language=javascript>alert('Thay đổi thành công')</script>";
                header("Location:?act=mkmoi");
            }
            include "../view/user/matkhaumoi.php";
            break;
        case 'thuvienanh':
            include "../view/user/thuvienanh.php";
            break;
        case 'quanlyphongdat':
            $books = book_select_all_by_user($_SESSION["user"]["id"]);
            if (isset($_GET["status"])) {
                $status = $_GET["status"];
                $id = $_GET["id"];
                book_change_status($status, $id);
                header("Location: ?act=quanlyphongdat");
            }
            if (isset($_POST["rate"])) {
                $id_Phong = $_POST["id_Phong"];
                $content = $_POST["rate_content"];
                $star = $_POST["rate_star"];
                $id_user = $_SESSION["user"]["id"];
                $status = 1;
                $id_book = $_POST["id_book"];
                book_change_status_bl($status, $id_book);
                bl_insert($id_user, $id_Phong, $content, $star, date("Y-m-d", time()));
                header("Location: ?act=quanlyphongdat");
            }
            include "../view/user/quanlyphongdat.php";
            break;

        case 'dangxuat':
            dangxuat();
            echo "<script language=javascript>
                sessionStorage.removeItem('user');
                window.location.href = 'user.php'</script>";
            // include "../view/user/dangnhap.php";

            break;
        default:
    }
} else {
    include "../view/user/trangchu.php";
}
include "../view/user/footer.php";
