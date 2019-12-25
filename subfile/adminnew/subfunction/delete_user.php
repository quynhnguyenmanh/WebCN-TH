<?php
    include "../../../connect.php";
    if(isset($_GET['id']))
    {
    print_r($_GET);
    $id=$_GET['id'];
    $data = $pdh->query("delete from users where id='$id'");
    $del = $data->fetch();
    header('location: ../widgets.php');
    }
?>