<?php
    session_start();
    define('THEME', 'themes/');
    define('PHP', '.php');
    define('TPL', '.tpl');
    // Define DIRECTORY_SEPARATOR constant
    define('DS', DIRECTORY_SEPARATOR);
    require_once 'define.php';
    $url = $_SERVER['REQUEST_URI'];
    $scheme = ($_SERVER['SERVER_PORT'] == 80 || $_SERVER['SERVER_PORT'] == 81) ? 'http://' : 'https://';
    $path_url = explode('/', $url);
    define('BASE_URL', $scheme . $_SERVER['HTTP_HOST'] . '/' . $path_url[1]) . '/';
    // Define global variable
    $page = !empty($_GET['lp']) ? $_GET['lp'] : 'Frontpage/index';
    $parsePage = explode('/', $page);
    // Find controller and action
    $controller = ucfirst($parsePage[0]);
    $action = count($parsePage) == 2 ?  $parsePage[1] :'index';
    
    $header = THEME . 'partials/header' . TPL;
    $footer = THEME . 'partials/footer' . TPL;
    $notfound = THEME . '404' . TPL;
    $style = THEME . 'partials/styles' . TPL;
    $script = THEME . 'partials/script' . TPL;
    // Design layout template
    require_once THEME. 'layout' .TPL;