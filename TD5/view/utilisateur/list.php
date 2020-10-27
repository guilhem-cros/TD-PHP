
<body>
    <?php
    foreach ($tab_u as $u)
        echo '<p> Utilisateur de login ' . '<a href= "https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=read&controller=utilisateur&login=' . rawurlencode($u->getLogin()) .'">' .  htmlspecialchars($u->getLogin()) . '</a>.</p>';
    ?>
    <br><a href="https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=create&controller=utilisateur"> Nouvel utilisateur </a>

</body>
</html>
