<?php 
 require_once 'db.php';

 function addUser($nom,$prenom,$email,$password,$etat)
{
    $sql = "INSERT INTO produit VALUES(NULL,$nom,'$prenom',$email,$password,$etat)";
    $con =getConnection();

    return $con->exec($sql);
    
//$result = addProduit('p01','chemise',7);//c pour tester
//echo 'Resultat : '.$result; //1   0  ''
}
 
 
 ?>