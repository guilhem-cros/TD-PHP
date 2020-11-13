<?php
        
        session_start();
       
        $_SESSION['login'] = "rlebreton";
        $_SESSION['isAdmin'] = "1";
        $_SESSION['panier'] = array("orange", "banana", "apple");
?>

<!DOCTYPE html>
<html>
    <title>Essaie session</title>
    <h1>Session</h1>
    <body>
        <p> login = <?php echo $_SESSION['login'];?> </p>
        <p>Panier session = <?php $tabUnse = $_SESSION['panier']; foreach($tabUnse as $value) echo $value . ", "; ?> </p>
        <?php unset($_SESSION['login']); ?>
        <p> login = <?php echo $_SESSION['login'];
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        // Il faut réappeler session_start() pour accéder de nouveau aux variables de session
        setcookie(session_name(),'',time()-1); // deletes the session cookie containing the session ID ?></p>
        
        <p>Panier session = <?php $tabUnse = $_SESSION['panier']; foreach($tabUnse as $value) echo $value . ", "; ?> </p>
         




    </body>
</html>


