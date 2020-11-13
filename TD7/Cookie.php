<?php
        
        $tab  = array("orange", "banana", "apple");
       
        setcookie("TestCookie", "OK", time()+3600);
        setcookie("Tableau", serialize($tab), time()+3600);
        setcookie ("TestCookie", "", time() - 1);
?>

<!DOCTYPE html>
<html>
    <title>Essaie cookie</title>
    <h1>Cookie</h1>
    <body>
        <!-- comment <p>Valeur cookie = <?php echo $_COOKIE["TestCookie"]; ?> </p> -->
        <p>Valeur cookie tab = <?php $tabUnse =  unserialize($_COOKIE["Tableau"]); foreach($tabUnse as $value) echo $value . ", ";?> </p>
        
    </body>
</html>






