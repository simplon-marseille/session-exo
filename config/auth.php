<?php

$login = 'nicolas';
$password = '12345678';
$error = null;

if(isset($_POST['login']) && isset($_POST['password'])){
    if($login !== $_POST['login'] || $password !== $_POST['password']){
        $error = 'Mot de passe ou identifiant invalident';
    }else{
        session_start();
        $_SESSION['admin'] = $login;
        header('Location: /index.php?page=dashboard');
    }
}

