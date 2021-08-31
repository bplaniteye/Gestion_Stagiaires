<?php
require "../../include/inc_config.php";
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
if ($id==0) {
    $sta_id=0;
    $sta_nom="";
    $sta_prenom="";
    $sta_ville="";
    $sta_adresse="";
    $sta_codepostal=0;
    $sta_promotion=0;
} else {
    $id=mres($id);
    $sql="select * from stagiaires where sta_id=$id";
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
        <form method="post" action="stagiaires_save.php">
            <input type="hidden" name="sta_id" value="<?=$sta_id?>">
            <p>
                <label>Réf : </label><b><?=$sta_id?></b>
            </p>
            <label for="sta_nom">Nom</label>
        <input type="text" name="sta_nom" id="sta_nom" value="<?php $sta_nom ?>">
        <br> <br>

        <label for="sta_prenom">Prénom</label>
        <input type="text" name="sta_prenom" id="sta_prenom" value="<?php $sta_prenom ?>">
        <br> <br>

        <label for="sta_adresse">Adresse</label>
        <input type="text" name="sta_adresse" id="sta_adresse" value="<?php $sta_adresse ?>">
        <br> <br>

        <label for="sta_ville">Ville</label>
        <input type="text" name="sta_ville" id="sta_ville" value="<?php $sta_ville ?>" >
        <br> <br>
        <label for="sta_codepostal">Code postal</label>
        <input type="number" name="sta_codepostal" id="sta_codepostal" value="<?php $sta_codepostal ?>">
        <br> <br>

        <label for="sta_classe">Niveau d'études</label>       
        <select name="sta_classe" id="sta_classe" value="<?php $sta_classe ?>">            
            <option value="Prepa DWWM">Prepa DWWM</option>
            <option value="DWWM 1">DWWM 1</option>
            <option value="DWWM 2">DWWM 2</option>
            <option value="PREPA CRCD">Prepa CRCD</option>
            <option value="CRCD">CRCD</option>
            <option value="PREPA IFMK">Prepa IFMK</option>
            <option value="IFMK 1">IFMK 1</option>
            <option value="IFMK 2">IFMK 2</option>
            <option value="IFMK 3">IFMK 3</option>
            <option value="IFMK 4">IFMK 4</option>
            <option value="IFMK 5">IFMK 5</option>
            <option value="IFMK 6">IFMK 6</option>
            <option value="IFMK 7">IFMK 7</option>
            <option value="IFM%K 8">IFMK 8</option>            
        </select>
        <br> <br>


        <label for="sta_promotion">Promotion : </label>
                <select name="sta_promotion" id="sta_promotion">
                <?php OPTION_promotion($sta_promotion); ?>
                </select>
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