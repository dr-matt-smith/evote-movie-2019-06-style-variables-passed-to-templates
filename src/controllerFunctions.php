<?php
function homeAction()
{
    $pageTitle = 'home';
    $homePageStyle = "current_page";
    require_once __DIR__ . '/../templates/index.php';
}

function aboutAction()
{
    $pageTitle = 'about';
    $aboutPageStyle = "current_page";
    require_once __DIR__ . '/../templates/about.php';
}


function contactAction()
{
    $pageTitle = 'contact';
    $contactPageStyle = 'current_page';
    require_once __DIR__ . '/../templates/contact.php';
}


function listAction()
    {
        $pageTitle = 'list';
        $listPageStyle = 'current_page';
        require_once __DIR__ . '/../templates/list.php';
    }
    
    
    function sitemapAction()
{
    $pageTitle = 'sitemap';
    $sitemapPageStyle = 'current_page';
    require_once __DIR__ . '/../templates/sitemap.php';
}