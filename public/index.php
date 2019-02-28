<?php
require_once __DIR__ . '/../src/controllerFunctions.php';

// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

// based on value (if any) of 'action' decide which template to output
switch ($action){
    case 'about':
        aboutAction();
        break;
    case 'contact':
        contactAction();
        break;
    case 'list':
        listAction();
        break;
    case 'sitemap':
        sitemapAction();
        break;
    case 'index':
    default:
        // default is home page ('index' action)
        homeAction();
}