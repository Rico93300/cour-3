<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $productQuery = "SELECT * FROM product WHERE id = :id";
    $productStatement = $mysqlClient->prepare($productQuery);
    $productStatement->bindParam(':id', $id);
    $productStatement->execute();
    $product = $productStatement->fetch();

    if (!$product) {
        require_once(__DIR__ . "/404.php");
        exit;
    }
}else{
    require_once(__DIR__ . "/404.php");
        exit; 
}
require_once(__DIR__ . "/../views/product/productRead.view.php");
