<?php
include "../../../connect.php";
//$ma = isset($_POST['mabh'])?$_POST['mabh']:'';
$tenbh = isset($_POST['tenbh'])?$_POST['tenbh']:'';
$macasi = isset($_POST['macasi'])?$_POST['macasi']:'';
$maalbum = isset($_POST['maalbum'])?$_POST['maalbum']:'';
$maloai = isset($_POST['maloai'])?$_POST['maloai']:'';
$filenhac=isset($_FILES['filenhac']['name'])?$_FILES['filenhac']['name']:'';
$file="../../../audio/nhac/" . $_FILES['filenhac']['name'];
move_uploaded_file($_FILES['filenhac']['tmp_name'],$file);
//copy($_FILES['filenhac']['tmp_name'],$file);
$sql1="select maCaSi,tenCaSi from casi";
$data1=$pdh->query($sql1);
$data1->execute();
$casi=$data1->fetchAll();
for($i=0;$i<count($casi);$i++)
{   
    if(strcasecmp($casi[$i][1],$macasi)==0)
    {
        $macasi=$casi[$i][0];
        break;
    }
            if($i==count($casi)-1)
            {
            $sql2="insert into casi(tenCaSi) values (?)";
            $arr=array($macasi);
            $data2=$pdh->prepare($sql2);
            $data2->execute($arr);
            $data1->execute();
            $casi=$data1->fetchAll();
            for($i=0;$i<=count($casi);$i++)
                {   
                if(strcasecmp($casi[$i][1],$macasi)==0){
                    $macasi=$casi[$i][0];
                    break;
                        }       
                }
            }
}

$loinhac = isset($_POST['loinhac'])?$_POST['loinhac']:'';
$sql="insert into baihat(tenBaiHat,maAlbum,path,maloai,maCaSi,loinhac) values(?,?,?,?,?,?)";
$arr = array($tenbh,$maalbum,$filenhac,$maloai,$macasi,$loinhac);
$data = $pdh->prepare($sql);
$data->execute($arr);     
header('location: ../basic_table.php');           
?>                       