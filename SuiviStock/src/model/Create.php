

<?php 
 require_once "db.php";

if (isset($_POST['ref']) && isset($_POST['nom']) && isset($_POST['qtStock'])){

  $ref=$_POST["ref"];
  $nom=$_POST["nom"];
  $qtStock=$_POST["qtStock"];
  $message='';
  $sql = "INSERT INTO produit(ref,nom,qtStock) VALUES('$ref','$nom','$qtStock')";
  $statement=$connection->prepare($sql);
  if($statement->execute([':ref' => $ref, ':nom'=>$nom, ':qtStock'=>$qtStock])){
     $message='Data inserted successfully';
  }
  
}
?>
<?php require_once 'C:\xampp\htdocs\SuiviStock\header.php'?>

<div class="Container">

<div class="card mt-5" >

<div class="card-header">
 <h2>Create Product</h2>
</div>
<div class="card-body">
<?php if(!empty($message)):?>
<div class= "alert alert-success">
<?= $message;?>
</div>
<?php endif; ?>
<form method="post">
<div class="form-group">
<label for="ref" class="text-info">REF PRODUIT:</label><br>
<input type="text" name="ref" id="ref" class="form-control">
</div>
<div class="form-group">
<label for="nomP" class="text-info">NAME PRODUCT:</label>
<input type="text" name ="nom" id="nom" class="form-control">
</div>
<div class="form-group">
<label for="qtStock" class="text-info">QUANTITIES:</label><br>
<input type="text" name="qtStock" id="qtStock" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-info" name="create">Create Product</button>
</div>
</form>
</div>
</div>
</div>


<?php  require 'C:\xampp\htdocs\SuiviStock\footer.php' ?>

