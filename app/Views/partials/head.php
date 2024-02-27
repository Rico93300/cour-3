<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?php
        // si la variable tittlt existe olors on affiche le contenue
        if (isset($title)) {
            echo $title;
        }  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-info ">
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/"> <img src="public/img/logo.png" height="60"></a>

            </li>


            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mentions-legales">Mentions Legales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/product">produit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/product-create">creation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Admin">Admin</a>
            </li>
        </ul>
    </nav>