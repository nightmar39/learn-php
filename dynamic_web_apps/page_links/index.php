<?php

require "function.php"; 

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

//dd($uri); 

//Very rudimentary logic, takes in the URI and tries to match it, and loads a page
/*
if ($uri === '/'){
    require "controllers/organize.php";
}
else if ($uri === '/about'){
    require "controllers/about.php";
}
else if ($uri === '/contact'){
    require "controllers/contact.php";
}
*/ 


//Can instead use an assoc array to map values 
$routes = [
    '/' => "controllers/organize.php",
    '/about' => "controllers/about.php", 
    '/contact' => "controllers/contact.php"
]; 