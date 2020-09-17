<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Test voiture </title>
    </head>

   
    <body>
    	<?php
    	require_once('Voiture.php');
    	$voiture1 = new Voiture("BMW", "BLEU", "HYF586YH");
    	echo $voiture1->afficher();


    	?>
   </body>

</html>