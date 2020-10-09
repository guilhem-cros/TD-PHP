<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Détails des voitures</title>
    </head>
    <body>
        <?php
        echo "<li> Marque : " . $v->getMarque() . "</li>" .
                "<li> Couleur : " . $v->getCouleur() . "</li>" .
                "<li> Immatriculation : " . $v->getImma() . "</li>";
        ?>
    </body>
</html>