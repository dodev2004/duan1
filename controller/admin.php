<?php
ob_start();
include "../view/admin/header.php"; ?>
<?php
    include "../models/pdo.php";
    include "../models/loaiphong.php";
    
    if(isset($_GET["act"]) && isset($_GET["page"])  && $_GET["act"]){
        $act = $_GET["act"];
        $page = $_GET["page"];
       switch($page){
            case "loaiphong":
                if($act == "lk"){
                    $rts = db_lp_Select_all(); 
                    include "../view/admin/loaiphong/lk.php";
                }
                else if($act == "them") {
                    if(isset($_POST["add"])){
                        $name  = $_POST["ten_LoaiPhong"]; 
                        db_lp_insert($name);
                    }
                    include "../view/admin/loaiphong/add.php";
                }
                else if($act == "delete"){
                    db_lp_delete($_GET["id"]);
                    header("Location:admin.php?act=lk&page=loaiphong");
                }
                else if($act == "rmAll"){
                    $id = $_GET["id"];
                    $ids = explode(",",$id);
                    db_lp_delete($ids);
                    header("Location:admin.php?act=lk&page=loaiphong");

                }
                else if($act == "edit") {
                    $id = $_GET["id"];

                    $lp = db_lp_Select_by_id($id);  
                    if(isset($_POST["edit"])){
                        $name = $_POST["ten_LoaiPhong"];
                        db_lp_update($id,$name);
                        echo "<script language='javascript'>alert('Sửa thành công')
                        window.location.href = '?act=lk&page=loaiphong'</script>
                           
                        ";
                        
                    }
                    include "../view/admin/loaiphong/edit.php";
                }
                else {
                    
            
                }
            break;
            case "phong": 
                if($act == "lk"){
                    include "../view/admin/phong/lk.php";
                }
                else if($act == "them") {
                    include "../view/admin/phong/add.php";
                }
                else if($act == "delete"){
                    db_lp_delete($_GET["id"]);
                    header("Location:admin.php?act=lk&page=phong");
                }
                else if($act == "rmAll"){
                    $id = $_GET["id"];
                    $ids = explode(",",$id);
                    db_lp_delete($ids);
                    header("Location:admin.php?act=lk&page=phong");

                }
                else if($act == "edit"){
                    include "../view/admin/phong/edit.php";
                }
                else {
                  
                }
            break;
            case "dichvu":
                if($act == "them"){
                    include "../view/admin/dichvu/add.php";
                }
                else if($act == "sua"){
                    include "../view/admin/dichvu/edit.php";
                }
                else if($act == "detele"){

                }
                else if ($act == "rmAll"){

                }
                else if ($act == "edit"){

                }
                else {
                    include "./view/admin/dichvu/lk.php";
                }
                break;
            default:

            break;
       }
    }
    include "../view/admin/footer.php";
?>