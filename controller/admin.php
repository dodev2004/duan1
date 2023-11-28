<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (!(isset($_SESSION["user"]))) {
    header("Location: ../view/admin/login/index.php");
    var_dump($_SESSION["user"]);
}

?>
<?php
include "../models/pdo.php";
include "../models/datphong.php";
include "../models/loaiphong.php";
include "../models/phong.php";
include "../models/dichvu.php";
include "../models/thanhvien.php";
include "../models/privilege.php";
include "../view/admin/regex.php";
include "../view/admin/header.php";

$user_privilege = select_all_db_user_privilege($_SESSION["user"]["id"]);

$check = checkPrivileges();
var_dump($check);
if (!$check) {
    include "../view/admin/footer.php";
    exit;
}
if (isset($_GET["act"]) || isset($_GET["page"])) {
    $act = isset($_GET["act"]) ? $_GET["act"] : "";
    $page = $_GET["page"];


    switch ($page) {
        case "loaiphong":
            if ($act == "lk") {
                $rts = db_lp_Select_all();
                include "../view/admin/loaiphong/lk.php";
            } else if ($act == "them") {
                if (isset($_POST["add"])) {
                    $name  = $_POST["ten_LoaiPhong"];
                    db_lp_insert($name);
                }
                include "../view/admin/loaiphong/add.php";
            } else if ($act == "delete") {
                db_lp_delete($_GET["id"]);
                header("Location:admin.php?act=lk&page=loaiphong");
            } else if ($act == "rmAll") {
                $id = $_GET["id"];
                $ids = explode(",", $id);
                db_lp_delete($ids);
                header("Location:admin.php?act=lk&page=loaiphong");
            } else if ($act == "edit") {
                $id = $_GET["id"];

                $lp = db_lp_Select_by_id($id);
                if (isset($_POST["edit"])) {
                    $name = $_POST["ten_LoaiPhong"];
                    db_lp_update($id, $name);
                    echo "<script language='javascript'>alert('Sửa thành công')
                        window.location.href = '?act=lk&page=loaiphong'</script>
                           
                        ";
                }
                include "../view/admin/loaiphong/edit.php";
            }
            break;
        case "phong":
            $room_services = db_dv_select();
            $lps = db_lp_Select_all();
            if ($act == "lk") {
                $rooms = db_phong_select_all_Pagin($_GET["currentPage"]);
                $count = count($rooms);
                $paggin = ceil(count(db_phong_select_all()) / 4);
                include "../view/admin/phong/lk.php";
            } else if ($act == "them") {

                if (isset($_POST["add"])) {
                    $name = $_POST["ten_Phong"];
                    $id_LoaiPhong = $_POST["id_LoaiPhong"];
                    $dientich = $_POST["dientich"];
                    $gia = $_POST["gia"];
                    $sl_Phong = $_POST["sl_Phong"];
                    $slNguoiLon = $_POST["slNguoiLon"];
                    $slTreEm = $_POST["slTreEm"];
                    $avatar = !empty($_FILES["avatar"]["name"]) ?  $_FILES["avatar"]["name"] : null;
                    $files = $_FILES["slider"]["name"];
                    $gioiThieuChung = $_POST["introduction_room"];
                    $mota = $_POST["description"];
                    $room_service = $_POST["room_service"];
                    if ($avatar) {
                        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/avatar/" . $avatar);
                    }
                    $id = db_phong_insert($name, $id_LoaiPhong, $dientich, $gia, $sl_Phong, $slNguoiLon, $slTreEm, $avatar, $gioiThieuChung, $mota);
                    if (!empty($files[0])) {
                        foreach ($files as $index => $file) {
                            move_uploaded_file($_FILES["slider"]["tmp_name"][$index], "../public/image/slider/" . $file);
                        }
                        db_phong_insert_images($files, $id);
                    }

                    db_phong_insert_dichvu_phong($room_service, $id);

                    echo "<script language='javascript'>alert('Thêm thành công')
                    window.location.href = '?act=lk&page=phong&currentPage=1'</script>
                    ";
                }
                include "../view/admin/phong/add.php";
            } else if ($act == "delete") {
                db_phong_delete($_GET["id"]);
                header("Location:admin.php?act=lk&page=phong&currentPage=1");
            } else if ($act == "rmAll") {
                $id = $_GET["id"];
                $ids = explode(",", $id);
                db_phong_delete($ids);
                header("Location:admin.php?act=lk&page=phong&currentPage=1");
            } else if ($act == "edit") {
                $id = $_GET["id"];
                $room = db_phong_select_by_id($id);
                $services = db_phong_select_id_dichvu($id);
                $images = db_phong_select_all_images_by_id($id);
                if (isset($_POST["edit"])) {
                    $name = $_POST["ten_Phong"];
                    $id_LoaiPhong = $_POST["id_LoaiPhong"];
                    $dientich = $_POST["dientich"];
                    $gia = $_POST["gia"];
                    $sl_Phong = $_POST["sl_Phong"];
                    $slNguoiLon = $_POST["slNguoiLon"];
                    $slTreEm = $_POST["slTreEm"];
                    $avatar = !empty($_FILES["avatar"]["name"]) ?  $_FILES["avatar"]["name"] : Null;
                    $files = $_FILES["slider"]["name"];
                    $gioiThieuChung = $_POST["introduction_room"];
                    $mota = $_POST["description"];

                    $room_service = !empty($_POST["room_service"][0]) ? $_POST["room_service"] : Null;
                    if ($avatar) {
                        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../public/image/avatar/" . $avatar);;
                    }
                    db_phong_update($name, $id_LoaiPhong, $dientich, $gia, $sl_Phong, $slNguoiLon, $slTreEm, $avatar, $gioiThieuChung, $mota, $id);

                    if (!empty($files[0])) {
                        foreach ($files as $index => $file) {
                            move_uploaded_file($_FILES["slider"]["tmp_name"][$index], "../public/image/slider/" . $file);
                        }
                        db_phong_insert_images($files, $id);
                    }
                    if ($room_service) {
                        $lenght = count($services);

                        if ($lenght > 0) {
                            $rm = $room_service;
                            for ($i = 0; $i < $lenght; $i++) {
                                foreach ($room_service as $index => $sv) {
                                    if ($sv == $services[$i]["id_dichVu"]) {
                                        array_splice($room_service, $index, 1);
                                        break;
                                    }
                                }
                            }
                            db_phong_insert_dichvu_phong($room_service, $id);
                            db_phong_delete_dv($rm, $id);
                        }
                    } else {


                        db_phong_delete_dv($room_service, $id);
                    }
                    echo "<script language='javascript'>alert('Sửa thành công')
                window.location.href = '?act=lk&page=phong&currentPage=1'</script>
                ";
                }
                include "../view/admin/phong/edit.php";
            } else if ($act == "removeSlider") {
                $id = $_GET["id"];
                $idImage = $_GET["idImage"];
                $images = db_phong_select_all_images_by_id($id);
                foreach ($images as $image) {
                    if ($image["id"] == $idImage) {
                        $checked = db_anhphong_image_exists($image["Image"], $id);
                        if (!(is_array($checked))) {
                            unlink("../public/image/slider/" . $image["Image"]);
                        }
                    }
                }
                db_phong_delete_image($idImage);
                header("Location:?act=edit&page=phong&id=" . $id);
            } else {
            }
            break;
        case "tiennghi":
            if ($act == "them") {
                if (isset($_POST["add"])) {
                    $name = $_POST["ten_TienNghi"];
                    $image = $_FILES["room_service"]["name"];
                    move_uploaded_file($_FILES["room_service"]["tmp_name"], "../public/image/tiennghi/" . $image);
                    db_dv_insert($name, $image);
                    echo "<script language='javascript'>alert('Thêm thành công')
                        window.location.href = '?act=lk&page=tiennghi'</script>";
                }
                include "../view/admin/dichvu/add.php";
            } else if ($act == "sua") {
                $id = $_GET["id"];
                if (isset($_POST["edit"])) {
                    $name = $_POST["ten_TienNghi"];
                    $image = !empty($_FILES["room_service"]["name"]) ? $_FILES["room_service"]["name"] : null;
                    if ($image) {
                        move_uploaded_file($_FILES["room_service"]["tmp_name"], "../public/image/tiennghi/" . $image);
                    }
                    db_dv_update($id, $image, $name);
                    echo "<script language='javascript'>alert('Sửa thành công')
                    window.location.href = '?act=lk&page=tiennghi'</script>";
                }
                $service = db_dv_select_by_id($_GET["id"]);
                include "../view/admin/dichvu/edit.php";
            } else if ($act == "delete") {
                db_dv_delete($_GET["id"]);
                echo "<script language='javascript'>alert('Xóa thành công')
                window.location.href = '?act=lk&page=tiennghi'</script>";
            } else if ($act == "rmAll") {
                $id = $_GET["id"];
                $ids = explode(",", $id);
                db_dv_delete($ids);
                header("Location:admin.php?act=lk&page=tiennghi");
            } else {
                $sevices = db_dv_select();

                include "../view/admin/dichvu/lk.php";
            }
            break;
        case "thanhvien":
            if ($act == "lk") {
                $id  = $_SESSION["user"]["id"];
                $users = nguoidung_select_all_Pagin($_GET["currentPage"], $id);
                $count = count($users);
                $paggin = ceil(count(nguoidung_select_all()) / 4);
                include "../view/admin/thanhvien/lk.php";
            } else if ($act == "them") {
                $eror = "";
                if (isset($_POST["add"])) {
                    $name = $_POST["name"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $checkuser = nguoidung_id_select_by_user_name($username);

                    if (is_array($checkuser)) {
                        $eror  = "Tài khoản đã được sử dụng ";
                    } else {
                        nguoidung_insert($name, $username, "", md5($password), date('Y/m/d', time()), date('Y/m/d', time()));
                        echo "<script language=javascript>alert('Đăng ký thành công') window.location.href = '?act=lk&page=thanhvien&currentPage=1</script>
                           '
                        ";;
                    }
                }
                include "../view/admin/thanhvien/add.php";
            } else if ($act == "edit") {
                $id = $_GET["id"];
                $user = nguoidung_select_by_id($id);
                extract($user);
                if (isset($_POST["edit"])) {
                    $name = $_POST["name"];
                    $user_name = $_POST["username"];
                    $password = $_POST["password"];
                    nguoidung_update_admin($id, $name, $user_name, md5($password), date('Y/m/d', time()));
                    echo "<script language='javascript'>alert('Sửa thành công')
                    window.location.href = '?act=lk&page=thanhvien&currentPage=1'</script>
                    ";
                }
                include "../view/admin/thanhvien/edit.php";
            } else if ($act == "delete") {
                nguoidung_delete($_GET["id"]);
                echo "<script language='javascript'>
                window.location.href = '?act=lk&page=thanhvien&currentPage=1'</script>";
            } else if ($act == "rmAll") {
                $id = $_GET["id"];
                $ids = explode(",", $id);
                nguoidung_delete($ids);
                header("Location:admin.php?act=lk&page=thanhvien");
            } else if ($act == "privilege") {
                $id_user = $_GET["id"];
                $user_privileges = select_all_db_user_privilege("$id_user");


                if (isset($_POST["save"])) {
                    if (!isset($_POST["privilege"])) {
                        delete_user_privilege(null, $id_user);
                    } else {
                        $privileges = $_POST["privilege"];
                        $rm = $privileges;
                        $lenght = count($user_privileges);
                        for ($i = 0; $i < $lenght; $i++) {
                            if (!empty($privileges)) {
                                foreach ($privileges as $index => $privilege) {
                                    if ($privilege == $user_privileges[$i]["privilege_id"]) {
                                        array_splice($privileges, $index, 1);

                                        break;
                                    }
                                }
                            }
                        }

                        if (!empty($privileges)) {

                            insert_user_privilege($privileges, $id_user, time(), time());
                            delete_user_privilege($rm, $id_user);
                        } else {
                            delete_user_privilege($rm, $id_user);
                        }
                    }
                    echo "<script language='javascript'>alert('Phân quyền thành công')
                window.location.href = '?act=lk&page=thanhvien&currentPage=1'</script>
                ";
                }

                $privilegeg_groups = db_privilege_group_select_all();
                include "../view/admin/thanhvien/privilege.php";
            }
            break;

        case "datphong":
            if ($act == "xndp") {
                if(isset($_GET["status"])){
                    $id  = $_GET["id"];
                    $status = $_GET["status"];
                    if($status == 2){
                        book_change_status($status,$id);
                        header("Location: ?act=xndp&page=datphong");
                    }
                }
                $books  = book_select_by_stt_xndp();
                
                include "../view/admin/phongdat/xacnhandp.php";
            } else if ($act == "xntt") {
                $books = book_select_by_stt_xntt();
                if(isset($_GET["status"])){
                    $id = $_GET["id"];
                    $status = $_GET["status"];
                    book_change_status($status,$id);
                    header("Location: ?act=xntt&page=datphong");
                }
                include "../view/admin/phongdat/xacnhantt.php";
            }
            break;
        case "dangxuat":
            unset($_SESSION["user"]);
            echo "<script language=javascript>
       sessionStorage.removeItem('user');
       </script>";
            header("Location:admin.php");
            break;
        default:

            break;
    }
} else {
    include "../view/admin/header.php";
}
include "../view/admin/footer.php";
?>