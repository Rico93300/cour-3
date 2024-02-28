<?php
$title = "login";
require_once(__DIR__ . "/../partials/head.php") ?>

<h1>Page login</h1>
<form action="" method="POST">
    <div>
        <label for="email">email :</label>
        <input type="email" name="email" />
    </div>
    <div>
        <label for="password">password:</label>
        <input type="password" name="password" />
    </div>


    <button type="submit" class='btn btn-primary '>Login</button>
</form>

<?php require_once(__DIR__ . "/../partials/footer.php");
if (isset($error)) {
    echo "<p class='text-danger'>" . $error . "</p>";
} ?>