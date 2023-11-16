<?php
    include "../view/admin/header.php";
    if(isset($_GET["act"]) && isset($_GET["page"])  && $_GET["act"]){
        $act = $_GET["act"];
        $page = $_GET["page"];
       switch($page){
            case "loaiphong":
                if($act = "lk"){
                    include "../view/admin/loaiphong/lk.php";
                }
                else if($act = "them") {
                    include "../view/admin/loaiphong/add.php";
                }
                else {
                    include "../view/admin/loaiphong/sua.php";
                }
            break;
       }
    }
    include "../view/admin/footer.php";

?>