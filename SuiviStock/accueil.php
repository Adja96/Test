<?php 
require 'src\model\db.php';
$sql = 'SELECT* FROM produit';
$statement = $connection->prepare($sql);
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php'; ?>
<div class="container">
<div class="card mt-5">
<div class="card-header">
<h2>All Products</h2>

</div>
<div class="card-body">
<table class = "table table-bordered">
<tr>
<th>ID</th>
<th>Reference</th>
<th>Product Name </th>
<th>Quantities</th>
<th>Action</th>
</tr>
<?php foreach($products as $produit): ?>
<tr>
<td><?= $produit->id; ?></td>
<td><?= $produit->ref; ?></td>
<td><?= $produit->nom; ?></td>
<td><?= $produit->qtStock; ?></td>
<td>
<a href= "Edit.php?id=<?= $produit->id ?>" class= "btn btn-info"> Edit</a>
<a onclick="return confirm('Are you sure you want to delete this entry?')" href= "Delete.php?id=<?= $produit->id ?>" class="btn btn-danger"> Delete</a>
</td>

</tr>
<?php endforeach; ?>
</table>
</div>
</div>
</div>
<?php require 'footer.php' ; ?>