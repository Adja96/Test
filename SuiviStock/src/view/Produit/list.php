<?php 
require("insertion");
if (isset($_POST["enregistrer"]))
{

  $a=$_POST["libelle"];
  $b=$_POST["prix"];
  $c=$_POST["details"];
  $d=$_POST["quantite"];


 require("connect.php");

 $req="insert into produit(libelle,prix,details,quantite) values ('$a','$b','$c','$d')";
 if (! mysqli_query($link,$req)){
 echo "erreur sur la requete d'insertion";
 die();

    }
 echo "<script langage='js'>alert('enregistrement reussi')</script>";
 echo "<script langage='js'>document.location.href='fournisseur.php'</script>";
}

?>