<?php
require "../../include/inc_config.php";
$sql="select * from promotion";
$result = mysqli_query($link,$sql);
if ($result===false) {
    echo mysqli_error($link);
    exit();
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
        <table>
            <caption><a href="promotion_edit.php?id=0">Créer enregistrement</a></caption>
            <thead>
                <tr>
                    <th>Ré<footer></footer></th>
                    <th>Promotion</th>                    
                    <th>Edition</th>
                    <th>Suppression</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    //Application de htmlspecialchar à chaque élement de $row
                    extract(array_map("hsc",$row));    
                    ?>
                <tr>
                    <td><?=$pro_id?></td>
                    <td><?=$pro_label?></td>                    
                    <td><a href="promotion_edit.php?id=<?=$pro_id?>">Edition</a></td>
                    <td><a href="promotion_delete.php?id=<?=$pro_id?>">Suppression</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- pied de page -->
    <footer>
    <?php require "../../include/inc_footer.php"; ?>
    </footer>
</body>
</html>