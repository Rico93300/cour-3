<?php
$title = "update";
require_once(__DIR__ . "/../partials/head.php") ?>
<h1>Page update</h1>
<form action="" method="POST">
    <div>
        <label for="name">name :</label>
        <input type="text" name="name"  value="<?php echo $user['name']?>"/>
    </div>
    <div>
        <label for="email">email :</label>
        <input type="text" name="email" value="<?php echo $user['email']?>"/>
        
    </div>



    <button type="submit" class='btn btn-primary '>Envoyer</button>
</form>



<?php
  if (isset($error)) {
     echo "<p class='text-danger'>" . $error . "</p>";
 }


require_once(__DIR__ . "/../partials/footer.php") ?>