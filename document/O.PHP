

<form action="" method="POST">
        <input type="hidden" name="sta_id" id="sta_id" value="<?= $sta_id ?>" />

        <label for="sta_nom">Nom</label>
        <input type="text" name="sta_nom" id="sta_nom" value="<?php $sta_nom ?>">
        <br> <br>

        <label for="sta_prenom">Prénom</label>
        <input type="text" name="sta_prenom" id="sta_prenom" value="<?php $sta_prenom ?>">
        <br> <br>

        <label for="sta_adresse">Adresse</label>
        <input type="text" name="" id="sta_adresse" value="<?php $sta_adresse ?>">
        <br> <br>

        <label for="sta_ville">Ville</label>
        <input type="text" name="" id="sta_ville" value="<?php $sta_ville ?>" >
        <br> <br>
        <label for="sta_codepostal">Code postal</label>
        <input type="number" name="" id="sta_codepostal" value="<?php $sta_codepostal ?>">
        <br> <br>

        <label for="sta_promotion">Promotion</label>
        <?php OPTION_promotion($sta_id); ?>
        <br> <br>
        <input type="submit" name="btSubmit" value="Enregistrer">
    </form>