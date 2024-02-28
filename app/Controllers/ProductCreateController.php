<?php




if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && $_POST['price'] > 0 && strlen($_POST['title']) > 2) {
    // je recupere les elements du formulaire
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // je cree ma requete
    $productQuery = "INSERT INTO product (title,description,price) VALUE (:title, :description, :price)";
    // je prepare ma requete sql et l'envoie
    $productStatement = $mysqlClient->prepare($productQuery);
    // je modifie les valeurs de ma requete en fonction des valeurs du formulaire
    $productStatement->bindParam(':title', $title);
    $productStatement->bindParam(':description', $description);
    $productStatement->bindParam(':price', $price);
    // j'execute la requte
    $productStatement->execute();
    // je rederige l'utilisateur vers la page product pour qu'il vois le nouveau produit
    header('Location: /product');
    exit();
} 

require_once(__DIR__ . "/../views/product/productCreate.view.php");
