<?php
require "../../include/inc_config.php";
$sql="select * from stagiaires,promotion where sta_promotion=pro_id 
and pro_label = 'Preparatoire'";
$result = mysqli_query($link,$sql);
if ($result===false) {
    echo mysqli_error($link);
    exit();
}
?>
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
        <h1>
            STAGIAIRES DE LA PREPARATOIRE
        </h1>
        <table>
            <caption><a href="stagiaires_edit.php?id=0">Créer un enregistrement</a></caption>
            <thead>
                <tr>
                    <th>Réf.</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Niveau d'études</th>
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
                    <td><?=$sta_id?></td>
                    <td><?=$sta_nom?></td>
                    <td><?=$sta_prenom?></td>
                    <td><?=$sta_adresse?></td>
                    <td><?=$sta_ville?></td>
                    <td><?=$sta_codepostal?></td>
                    <td><?=$sta_classe?></td>
                    <td><?=$pro_label?></td>
                    <td><a href="stagiaires_edit.php?id=<?=$sta_id?>">Edition</a></td>
                    <td><a href="stagiaires_delete.php?id=<?=$sta_id?>">Suppression</a></td>
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

