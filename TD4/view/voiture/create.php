<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Nouvelle voiture </title>
    </head>
   
    <body>
        <form method="get" action="routeur.php">
          <fieldset>
            <legend>Infos voiture :</legend>
            <p> 
                <input type ="hidden" name ="action" id="created"/>
              <label for="immat_id">Immatriculation</label> :
              <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
            </p>
            <p>
              <label for="color_id">Couleur</label> :
              <input type="text" placeholder="Ex : Vert" name="Couleur" id="color_id" required/>
            </p>
            <p>
              <label for="mark_id">Marque</label> :
              <input type="text" placeholder="Ex : Audi" name="Marque" id="mark_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer" />
            </p>
          </fieldset>
        </form>


    </body>
</html>

