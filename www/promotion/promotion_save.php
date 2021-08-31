<?php
require "../../include/inc_config.php";
//Application de mysqli_real_escape_string aux données du formulaire
extract(array_map("mres",$_POST));
if (isset($btSubmit)) {
    if ($pro_id==0)
        $sql="insert into promotion (pro_id,pro_label) values (null,'$pro_label')";
    else 
        $sql="update promotion set pro_label='$pro_label' where pro_id=$pro_id";

    $result=mysqli_query($link,$sql);
    if ($result===false) {
        echo mysqli_error($link);
        exit();
    }
}
header("location:promotion_liste.php");
?>