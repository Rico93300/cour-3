<?php
$title= "product";
require_once(__DIR__ . "/../partials/head.php") ?>

<h1>Page produit</h1>

<ul>

<?php 
foreach ($products as $product){
    echo '<li>' .$product['title'] . '-'.$product['description'] . '-' .$product['price'] . '€</li>';
    echo "<a class='btn btn-primary' href='/product-read?id=" . $product['id'] . "'>View Product</a>";
    echo "<a class='btn btn-warning' href='/product-update?id=" . $product['id'] . "'>update</a>";
    echo "<a class='btn btn-danger' href='/product-delete?id=" . $product['id'] . "'>Delete</a>";
} ?>
</ul>
<?php require_once(__DIR__ . "/../partials/footer.php") ?>