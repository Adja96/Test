
 <?php 
 require_once 'db.php';

 function addProduit($ref,$nomP,$qtStock)
{
    $sql = "INSERT INTO produit(ref,nomP,qtStock) VALUES($ref,'$nom',$qtStock)";
    $con =getConnection();

    return $con->exec($sql);
    
//$result = addProduit('p01','chemise',7);//c pour tester
//echo 'Resultat : '.$result; //1   0  ''
}
 
 
 ?>
 