<?php
require_once('database.php');

// Get products
$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
//print_r($products); // this is to get the data as an array!
?>
<?php include 'includes/header.php'; ?> 


<main class="container">
  <div class="starter-template text-center">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>

</main><!-- /.container -->

<?php include 'includes/footer.php'; ?>