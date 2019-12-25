<?php
    
    include "../../../connect.php";
    if(isset($_GET['id']))
    {
    print_r($_GET);
    $id=$_GET['id'];
    $data = $pdh->prepare("delete from baihat where maBaiHat= ?");
    $data->execute(array($id));
    header('location: ../basic_table.php');
    }
?>