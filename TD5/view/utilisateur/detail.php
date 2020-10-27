<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<li> Nom : " . htmlspecialchars($u->getNom()) . "</li>" .
                "<li> Prenom : " . htmlspecialchars($u->getPrenom()) . "</li>" .
                "<li> Login : " . htmlspecialchars($u->getLogin()) . "</li>".  
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=update&controller=utilisateur&login=" . rawurlencode($u->getLogin()) . "> Mettre à jour utilisateur </a>".
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=delete&controller=utilisateur&login=" . rawurlencode($u->getLogin()) . "> Supprimer utilisateur </a>";                              
                
      ?>
        
    </body>
</html>

