<?php
if (!isset($_SESSION)) session_start();
include "../../connect.php";
if(isset($_POST['login']) )
{
    $name=$_POST['user'];
    $pass=$_POST['password'];
    $data = $pdh->query("select * from users where taiKhoan='$name' and matKhau='$pass'");
    $r = $data->fetch();
    //print_r($r);
    $count=$data->rowCount();
    if($count!=0)
    {
        $_SESSION["user"]=$r['ten'];
        
        header("location:../../index.php");
        echo $_SESSION['user'];
    }
    else{
       echo"Login Fail";
    }
}
?>