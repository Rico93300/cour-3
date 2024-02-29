<?php
$title= "admin";
require_once(__DIR__ . "/../partials/head.php") ?>

<h1> Admin</h1>

<ul>

<?php 
foreach ($users as $user){
    echo '<li>' .$user['name'] . '-'.$user['email'] . '-' .$user['password'] . '</li>';
    echo "<a class='btn btn-danger' href='/admin-delete?id={$user['id']}'>Delete</a>";
    echo "<a class='btn btn-warning' href='/admin-update?id={$user['id']}'>update</a>";
} ?>
</ul>
<?php require_once(__DIR__ . "/../partials/footer.php") ?>