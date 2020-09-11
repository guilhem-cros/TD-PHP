<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte ."<br>";
          
          $prenom = "Marc";

			echo "Bonjour " . $prenom;
			echo "Bonjour $prenom";
			echo 'Bonjour $prenom' . "<br>";

			echo $prenom;
			echo "$prenom <br>";

      $marque = "BMW";
      $couleur = "Bleu";
      $immatriculation = "frt-503-yt";

      echo "Voiture $immatriculation de marque $marque (couleur $couleur) <br>" ;
      $voiture = array() ;
      $voiture[ 'Marque' ] = $marque;
      $voiture[ 'Couleur' ] = $couleur;
      $voiture[ 'Immatriculation' ] = $immatriculation ;
      print_r($voiture) ;
      echo "<br>";
      echo "Voiture $voiture[Immatriculation] de marque $voiture[Marque] (couleur $voiture[Couleur] ) <br>";

      $voiture2 = array();
      $voiture2[ 'Marque' ] = "Mercedes";
      $voiture2[ 'Couleur' ] = "Noire";
      $voiture2[ 'Immatriculation' ] = "dtr-845-ty" ;

      $voiture3 = array();
      $voiture3[ 'Marque' ] = "Dodge";
      $voiture3[ 'Couleur' ] = "Verte";
      $voiture3[ 'Immatriculation' ] = "tgy-854-bg";

      $listeVoiture = array();
      $listeVoiture['1'] = $voiture;
      $listeVoiture['2'] = $voiture2;
      $listeVoiture['3'] = $voiture3;
      print_r($listeVoiture) ;
      echo "<br>";

      echo "<h2> Liste de voitures <br> </h2>";
      if (empty($listeVoiture)) {
          echo "La liste est vide" ;
        }
      else{
        foreach ($listeVoiture as $key => $value) {
          echo "<ul>";
            foreach ($value as $key1 => $value1) {
            echo "<li> $value1 </li>";
            }
          echo "</ul>";
          }
        }
      

      


        ?>
    </body>
</html> 
