<!DOCTYPE html>
<html>
   
   
    <body>
        <form method="get" action="index.php">     
          <fieldset>
            <legend>Infos Utilisateur :</legend>
            <p> 
              <input type ="hidden" name ="action" value=<?php echo "\"$act\""?> />
              <input type ="hidden" name ="controller" value="utilisateur" />
              <label for="login">Login</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($login) . "\""?> name="login" id="login_id" <?php echo "$form=\"" . htmlspecialchars($login) . "\""?>/>
            </p>
            <p>
              <label for="nom">Nom</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($nom) . "\""?> name="nom" id="nom_id" required/>
            </p>
            <p>
              <label for="mark_id">Prenom</label> :
              <input type="text" <?php echo "value=\"" . htmlspecialchars($prenom) . "\""?> name="prenom" id="prenom_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer"/>
            </p>
        </form>


    </body>
</html>
