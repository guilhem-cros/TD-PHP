<?php
require_once 'Model.php';
require_once '../TD1/Voiture.php';

Model::Init();
$rep = (Model::$pdo)->query("Select * From Voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach($tab_obj as $value){
    print_r($value);
    echo "</br>";
}







/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
