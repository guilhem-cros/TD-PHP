<body>
    <?php
    foreach ($tab_u as $u)
        echo '<p> Passager de login ' . '<a href= "https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=read&controller=utilisateur&login=' . rawurlencode($u->getConducteur_login()) .'">' .  htmlspecialchars($u->getConducteur_login()) . '</a>.</p>';
    ?>
    

</body>
</html>
