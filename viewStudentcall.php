<?php
include("dbquery.php");
if(isset($_POST['id']))
{
    $arr=getStudent($_POST['id']);
    if($arr)
    {
        $json= json_encode($arr);
        echo $json;
    }
    else{
        echo json_encode(false);
    }
}

?>