<?php

// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

//echo $request_uri[0];

$tab_route = explode("/",$request_uri[0]);
//echo $tab_route[0];
//echo __DIR__;

// Route it up!
switch ($request_uri[0]) {
    // Home page
    case '/':
        require __DIR__.'/template/index.html';
        //echo "1";
        break;
    // About page
    case '/contact':
        require __DIR__.'/template/contact.html';
        
        break;
    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        //require '../views/404.php';
        break;
      }
 ?>
