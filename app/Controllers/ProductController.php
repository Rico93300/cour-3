<?php 

require_once(__DIR__ . "/../../config/db.php");


// j'ecris ma requete sql que je met dans une variable
$productQuery="SELECT* FROM product";
// puis je prepare la requete
$productstatement=$mysqlClient->prepare($productQuery);
// j'execute la requete
$productstatement-> execute();
// je recupere le resultat de la requete dans une variable
$products=$productstatement->fetchAll();

// echo"<pre>";
// var_dump($products);
// echo"<pre>";

require_once(__DIR__ . "/../views/product.view.php");
?>