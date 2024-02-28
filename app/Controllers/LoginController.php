<?php
if (isset($_SESSION['user'])){
    redirectToRoute('/');
}
if (isset($_POST["email"]) && isset($_POST["password"])) {
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

        $error = "invalid email";
        require_once(__DIR__ . "/../views/security/register.view.php");
        exit;
    }


    // je je prepare mon utilisateur en base de donnee et je les met dans la variable user
    $userQuery = "SELECT* FROM user WHERE email= :email";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':email', $email);

    $userStatement->execute();
    $user = $userStatement->fetch();

    if ($user) {
        if($password == $user['password']){
            $_SESSION['user']= [
        'id'=> uniqid(),
        'email'=>'$user["email"]',
        'admin' =>'$user["admin"]',
        ];
        redirectToRoute('/');

        }else{
            $error = "incorrect Email or password" ;
            require_once(__DIR__ . "/../views/security/register.view.php");
            exit;
        }
    } else {
        
        $error = "incorrect Email or password" ;
            
            
            //     $_SESSION['user']= $user['email'];
            //    redirectToRoute('home');
            }
        }
 
    require_once(__DIR__ . "/../views/security/login.view.php");
