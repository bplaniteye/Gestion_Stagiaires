<?php
require "../../include/inc_config.php";
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
if ($id==0) {
    $pro_id=0;
    $pro_label="";
} else {
    $id=mres($id);
    $sql="select * from promotion where pro_id=$id";
    $result = mysqli_query($link,$sql);
    if ($result===false) {
        echo mysqli_error($link);
        exit();
    }
    $row=mysqli_fetch_assoc($result);
    extract(array_map("hsc",$row));
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <?php require "../../include/inc_head.php"; ?>
    </head>
<body>
    <a href="#main" class="sr-only">Allez au contenu principal</a>
    <!-- entete de page -->
    <header>
    <?php require "../../include/inc_header.php"; ?>
    </header>
    <!-- liens de navigation -->
    <nav>
    <?php require "../../include/inc_nav.php"; ?>
    </nav>
    <!-- contenu principal -->
    <div id="main">
        <form method="post" action="promotion_save.php">
            <input type="hidden" name="pro_id" value="<?=$pro_id?>">
            <p>
                <label>Réf : </label><b><?=$pro_id?></b>
            </p>
            <p>
                <label for="pro_label">Promotion : </label>
                <input type="text" name="pro_label" id="pro_label" value="<?=$pro_label?>">
            </p>
            
            <p>
                <input type="submit" name="btSubmit" value="Envoyer">
            </p>
        </form>
    </div>
    <!-- pied de page -->
    <footer>
    <?php require "../../include/inc_footer.php"; ?>
    </footer>
</body>
</html>