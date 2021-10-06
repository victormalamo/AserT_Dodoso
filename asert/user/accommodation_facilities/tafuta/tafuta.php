<?php
require_once('../../../Connections/connmnrtsafari.php'); 
/*include("config.php");*/
if(isset($_GET['q']) && $_GET['q']!="") :
    $data = mysqli_real_escape_string($conntscpME,$_GET['q']);
    $keyword =  trim(preg_replace('/\s+/',' ',$data));
    $sql=$conntscpME->query("SELECT distinct meta_title FROM `demo_web_information` WHERE meta_title LIKE '%$keyword%' limit 10");
    $count=mysqli_num_rows($sql);
    if($count!=0) :
        $json_data=array();
        foreach ($sql as $key => $value):
            $json_data[] = $value['meta_title'];
        endforeach;
        echo json_encode($json_data);
    else :
        echo 0;
    endif;
endif;
?>