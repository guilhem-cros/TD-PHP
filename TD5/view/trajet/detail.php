<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<li> Id trajet : " . htmlspecialchars($t->getId()) . "</li>" .
                "<li> Depart : " . htmlspecialchars($t->getDepart()) . "</li>" .
                "<li> Arrivee : " . htmlspecialchars($t->getArrivee()) . "</li>".  
                "<li> Date : " . htmlspecialchars($t->getDate()) . "</li>" .
                "<li> Nombre de places restantes : " . htmlspecialchars($t->getNbPlaces()) . "</li>". 
                "<li> Login du conducteur : " . htmlspecialchars($t->getConducteur_login()) . "</li>".
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=update&controller=trajet&id=" . rawurlencode($t->getId()) . "> Mettre à jour le trajet </a>".
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=delete&controller=trajet&id=" . rawurlencode($t->getId()) . "> Supprimer le trajet </a>" ;
             /*   "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=passagers&controller=trajet&id=" . rawurlencode($t->getId()) . "> Voir les passagers </a>";*/
        
                
      ?>
        
    </body>
</html>
