<?php 
    function checkPrivileges($uri = false){
        $url = !$uri ? $_SERVER["REQUEST_URI"]: $uri;
        // $privileges = [
        //     "act=lk\&page=loaiphong$",
        //     "page=loaiphong\&act=edit&id=\d+$",
        //     "page=loaiphong&act=delete&id=\d+$",
        //    "act=rmAll&page=loaiphong&id",
        //     "act=them\&page=loaiphong$",
        //     "act=lk\&page=phong\&currentPage=\d+$",
        //     "act=them\&page=phong$",
        //     "act=edit\&page=phong\&id=\d+$",
        //     "act=delete\&page=phong\&id=\d+$",
        //     "act=removeSlider&page=phong&idImage=\d+\&id=\d+$",
        //     "act=rmAll&page=phong&id",
        //     "act=lk\&page=tiennghi$",
        //     "act=them\&page=tiennghi$",
        //     "act=sua\&page=tiennghi\&id=\d+$",
        //     "act=delete&page=tiennghi&id=\d+$",
        //     "act=rmAll&page=tiennghi&id",
        //     "act=lk\&page=thanhvien\&currentPage=\d+$",
        //     "act=them\&page=thanhvien$",
        //     "page=thanhvien\&act=edit\&id=\d+$",
        //     "page=thanhvien\&act=delete\&id=\d+$",
        //     "act=privilege\&page=thanhvien\&id=\d+$",
        //     "act=lk\&page=bl\&currentPage=1",
        //     "act=delete\&page=bl\&id=\d+$",
        //     "act=rmAll\&page=bl\&id$",
        //     "act=xndp\&page=datphong$",
        //     "act=xntt\&page=datphong$",
        //     "act=history\&page=datphong$",
            
        // ];
        $privileges = slelect_all_user_privilege($_SESSION["user"]["id"]);
        $newprivileges = [];
        foreach($privileges as $privilege){
            array_push($newprivileges,$privilege["url_match"]);
        }

        array_push($newprivileges,"page=dangxuat$","admin.php$");
       
        $privileges_item = implode("|",$newprivileges);
        preg_match('/'.$privileges_item.'/', $url, $matches, PREG_OFFSET_CAPTURE);
        return !empty($matches);
    }
?>