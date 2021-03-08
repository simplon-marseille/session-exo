<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    require 'home.php';
}

if($page === 'dashboard'){
    require 'dashboard.php';
}

if ($page === 'login') {
    require 'login.php';
}