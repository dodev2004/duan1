<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
    include ("../../../models/pdo.php");
    include ("./header.php");
  include ("../../../models/thanhvien.php");
    if(isset($_GET["act"]) && $_GET["act"] !=""){
        $act = $_GET["act"];
        switch ($act) {
            case 'dangky':
                $eror = "";
                if(isset($_POST["submit"])){
                  $name = $_POST["name"];
                  $username = $_POST["user"];
                  $password = $_POST["password"]; 
                  $checkuser =nguoidung_id_select_by_user_name($username);
                
                  if(is_array($checkuser)){
                    $eror  = "Tài khoản đã được sử dụng";
                 
                  }
                  else {
                    echo "<script language=javascript>alert('Đăng ký thành công')</script>";
                    nguoidung_insert($name,$username,"",md5($password),date('Y/m/d',time()),date('Y/m/d',time()));
                    header("Location: index.php");
                  }
                }
                    include("./register.php");
                break;
            
            default:
            $eror = [
                "username" =>"",
                "password" =>""
              ];
              if(isset($_POST["submit"])){
                $user = $_POST["username"];
                $password = $_POST["password"];
                $checked = nguoidung_signin($user,$password);
             
                if(is_array($checked)){
                  $_SESSION["user"] = $checked;
                
                  echo "<script language=javascript>
                  window.onload = function(){
                   
                    sessionStorage.setItem('user','true');
                    window.location.href = '../../../controller/admin.php';
                  }
                  </script>";
                }
                else {
                  $eror["password"] = "Thông tin đăng nhập sai";
                  $eror["username"] = "Thông tin đăng nhập sai";
                }
              }
                include "./login.php";
                break;
        }
    }
    else {
       
        include "./login.php";
    }
    include "./footer.php";
?>