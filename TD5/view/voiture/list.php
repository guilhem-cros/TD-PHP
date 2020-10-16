<!DOCTYPE html>
<html>
   
    <body>
        <?php
        
        foreach ($tab_v as $v)
            
            echo '<p> Voiture d\'immatriculation ' . '<a href= "https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=read&imma=' . rawurlencode($v->getImma()) .'">' .  htmlspecialchars($v->getImma()) . '</a>.</p>';
                
        ?>
    </body>
</html>
