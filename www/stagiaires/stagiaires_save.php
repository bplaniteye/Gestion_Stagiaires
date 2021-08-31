<?php
require "../../include/inc_config.php";
//Application de mysqli_real_escape_string aux données du formulaire
extract(array_map("mres",$_POST));
if (isset($btSubmit)) {
    if ($sta_id==0)
        $sql="insert into stagiaires (sta_id,sta_nom,sta_prenom,sta_adresse,sta_ville,sta_codepostal,sta_classe,sta_promotion) values (null,'$sta_nom','$sta_prenom','$sta_adresse','$sta_ville', '$sta_codepostal','$sta_classe','$sta_promotion')";
    else 
        $sql="update stagiaires set sta_nom='$sta_nom', sta_prenom='$sta_prenom', sta_adresse='$sta_adresse', sta_ville='$sta_ville', sta_codepostal='$sta_codepostal', 
        sta_classe='$sta_classe', sta_promotion='$sta_promotion' where sta_id=$sta_id";

    $result=mysqli_query($link,$sql);
    if ($result===false) {
        echo mysqli_error($link);
        exit();
    }
}
header("location:total_stagiaires.php");
?>