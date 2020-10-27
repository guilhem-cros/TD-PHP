<body>
    <?php
    foreach ($tab_t as $t)
        echo '<p> Trajet ' . '<a href= "https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=read&controller=trajet&id=' . rawurlencode($t->getId()) .'">' .  "numéro ". htmlspecialchars($t->getId()) . '</a>.</p>';
    ?>
    <br><a href="https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=create&controller=trajet"> Nouveau trajet </a>

</body>
</html>

