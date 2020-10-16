<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <body>
        <?php
        

        $ROOT_FOLDER = __DIR__;
        $DS = DIRECTORY_SEPARATOR;
        require_once "{$ROOT_FOLDER}$DS". "lib" . "$DS" . "File.php";
        require_once File::build_path(array("controller", "routeur.php"));
        ?>
    </body>
</html>
