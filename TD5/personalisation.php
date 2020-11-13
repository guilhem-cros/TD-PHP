<?php
       setcookie("preference", $_GET['preference'], time()+3600);
?>

<!DOCTYPE html>
<html>
    <title>Essaie cookie</title>
    <h2>Preference</h2>
    <body>
        <p>Vous serez désormais redirigé vers la page <?php echo $_COOKIE["preference"]; ?></p>  
    </body>
</html>

