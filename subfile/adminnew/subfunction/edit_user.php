<?php
include "../../../connect.php";
$ma=$_POST['m'];
$ten=$_POST['ten'];
$email=$_POST['email'];
$tk=$_POST['taiKhoan'];
$mk=$_POST['matKhau'];
$sql="update users set ten=?,taiKhoan=?,matKhau=?,email=? where id=? ";
$arr = array($ten,$tk,$mk,$email,$ma);
$stm = $pdh->prepare($sql);
$stm->execute($arr);
$n = $stm->rowCount();
header('location: ../widgets.php');
?>