<?php
$title= "Admin";
require_once(__DIR__ . "/partials/head.php") ?>

<h1> Admin</h1>

<ul>

<?php 
foreach ($users as $user){
    echo '<li>' .$user['name'] . '-'.$user['email'] . '-' .$user['password'] . '</li>';
    echo "<a class='btn btn-danger' href='/admin-delete?id={$user['id']}'>Delete</a>";
} ?>
</ul>
<?php require_once(__DIR__ . "/partials/footer.php") ?>