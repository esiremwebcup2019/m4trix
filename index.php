<?php
session_start();

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
        require __DIR__.'/src/home.php';
        //echo "1";
        break;
    // About page
    case '/reservation':
        require __DIR__.'/src/reservation.php';

        break;

    case '/about':
    require __DIR__.'/src/about.php';
    break;

    case '/anniversaire':
    require __DIR__.'/src/anniversaire.php';
    break;

    case '/contact':
    require __DIR__.'/src/contact.php';
    break;

    case '/fille':
    require __DIR__.'/src/fille.php';
    break;

    case '/garcon':
    require __DIR__.'/src/garcon.php';
    break;

    case '/mariage':
    require __DIR__.'/src/mariage.php';
    break;

    case '/voyage':
    require __DIR__.'/src/voyage.php';
    break;


    // Everything else

    default:
        header('HTTP/1.0 404 Not Found');
      require __DIR__.'/template/404.html';
        break;
      }
 ?>
