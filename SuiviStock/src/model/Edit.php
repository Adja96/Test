<?php 
 require_once "db.php";

 $id=$_GET['id'];
 $sql = 'SELECT * FROM produit WHERE id=:id';
 $statement = $connection->prepare($sql);
 $statement-> execute([':id'=>$id]);
 $product =$statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['ref']) && isset($_POST['nom']) && isset($_POST['qtStock'])){

  $ref=$_POST["ref"];
  $nom=$_POST["nom"];
  $qtStock=$_POST["qtStock"];
  $sql = 'UPDATE produit SET ref=:ref, nom=:nom, qtStock=:qtStock WHERE id=:id ';
  $statement=$connection->prepare($sql);
  if($statement->execute([':ref' => $ref, ':nom'=>$nom, ':qtStock'=>$qtStock, ':id'=>$id])){
     header("Location:accueil");
  }
  
}
?>
<?php require_once 'C:\xampp\htdocs\SuiviStock\header.php'?>

<div class="Container">

<div class="card mt-5" >

<div class="card-header">
 <h2>Update Product</h2>
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
<input value="<?=$product->ref; ?>" type="text" name="ref" id="ref" class="form-control">
</div>
<div class="form-group">
<label for="nom" class="text-info">NAME PRODUCT:</label>
<input value="<?=$product->nom; ?>" type="text" name ="nom" id="nom" class="form-control">
</div>
<div class="form-group">
<label for="qtStock" class="text-info">QUANTITIES:</label><br>
<input value="<?=$product->qtStock; ?>" type="text" name="qtStock" id="qtStock" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-info" name="create">Update Product</button>
</div>
</form>
</div>
</div>
</div>


<?php  require 'C:\xampp\htdocs\SuiviStock\footer.php' ?>

