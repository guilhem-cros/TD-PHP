<!DOCTYPE html>
<html>
   
   
    <body>
        <form method="get" action="index.php" controller="voiture">
          <fieldset>
            <legend>Infos voiture :</legend>
            <p> 
              <input type ="hidden" name ="action" value=<?php echo "\"$act\""?>/>
              <label for="immat_id">Immatriculation</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($imma) . "\""?> name="immatriculation" id="immat_id" <?php echo "$form=\"" . htmlspecialchars($imma) . "\""?>/>
            </p>
            <p>
              <label for="color_id">Couleur</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($color) . "\""?> name="Couleur" id="color_id" required/>
            </p>
            <p>
              <label for="mark_id">Marque</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($marque) . "\""?> name="Marque" id="mark_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer" />
            </p>
        </form>


    </body>
</html>

