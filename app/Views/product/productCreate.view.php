<?php
$title= "cration de produit";
require_once(__DIR__ . "/../partials/head.php") ?>
?>
<h1>  create produit</h1>
 <form action="/product-create" method="post">
    <div>
        <label for="title ">title</label>
        <input type="text" name ='title'>
    </div>
    <div>
        <label for="description ">discription</label>
        <textarea name="description" id = "" cols ="30" row ="10" ></textarea>
    </div>
    <div>
        <label for="price ">price</label>
        <input type="number" name ='price'>
    </div>
 
<button type="submit"> create</button>
</form>

<?php require_once(__DIR__ . "/../partials/footer.php") ?>
