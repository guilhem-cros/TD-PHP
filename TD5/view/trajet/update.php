<!DOCTYPE html>
<html>
   
   
    <body>
        <form method="get" action="index.php">     
          <fieldset>
            <legend>Infos Trajet :</legend>
            <p> 
              <input type ="hidden" name ="action" value=<?php echo "\"$act\""?> />
              <input type ="hidden" name ="controller" value="trajet" />
              <label for="id">Id trajet</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($id) . "\""?> name="id" id="idTrajet_id" <?php echo "$form=\"" . htmlspecialchars($id) . "\""?>/>
            </p>
            <p>
              <label for="depart">Depart</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($depart) . "\""?> name="depart" id="depart_id" required/>
            </p>
            <p>
              <label for="arrivee_id">Arrivee</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($arrivee) . "\""?> name="arrivee" id="arrivee_id" required/>
            </p>
            <p>
              <label for="date_id">Date</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($date) . "\""?> name="date" id="date_id" required/>
            </p>
            <p>
              <label for="nbPlaces_id">Nombres de places restantes</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($nbPlaces) . "\""?> name="nbPlaces" id="nbPlaces_id" required/>
            </p>
            <p>
              <label for="loginC_id">Login conducteur</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($loginC) . "\""?> name="loginC" id="loginC_id" <?php echo "$form=\"" . htmlspecialchars($id) . "\""?>/>
            </p>
            <p>
              <input type="submit" value="Envoyer"/>
            </p>
        </form>


    </body>
</html>