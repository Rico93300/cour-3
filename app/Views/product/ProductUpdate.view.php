<?php
$title= "produit update";
require_once(__DIR__ . "/../partials/head.php") ?>


<form action="" method="POST">
    <div>
        <label for="title ">title</label>
        <input type="text" name ='title' value="<?php echo $product['title']?>">
    </div>
    <div>
        <label for="description ">discription</label>
        <textarea name="description" id = "" cols ="30" row ="10" ><?php echo $product['description']?></textarea>
    </div>
    <div>
        <label for="price ">price</label>
        <input type="number" name ='price' value="<?php echo $product['price']?>">
    </div>
 
<button type="submit">update</button>
</form>

<?php require_once(__DIR__ . "/../partials/footer.php") ?>
