<?php
$title = "Regitre";
require_once(__DIR__ . "/../partials/head.php") ?>
<h1>Page enregistrement</h1>
<form action="/register" method="POST">
    <div>
        <label for="name">name :</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="email">email :</label>
        <input type="text" name="email" />
        
    </div>
    <div>
        <label for="password">Mot de Passe :</label>
        <input type="password" name="password" />
    </div>


    <button type="submit" class='btn btn-primary '>Envoyer</button>
</form>



<?php
  if (isset($error)) {
     echo "<p class='text-danger'>" . $error . "</p>";
 }


require_once(__DIR__ . "/../partials/footer.php") ?>