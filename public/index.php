<?php
// autoload entities
require '../app/entities/Autoloader.php';
autoloader::register();
// cookies setup
session_start();
if (empty($_SESSION)) {
    Logger::logConnection();
}
// get changement language
if (isset($_GET['l'])) {
    $_SESSION['settings']['language'] = $_GET['l'];
}
// default language
if (!isset($_SESSION['settings']['language'])) {
    $_SESSION['settings']['language'] = 'fr';
}
// default page
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_SERVER['REDIRECT_URL'])) {
    $tmp = $_SERVER['REDIRECT_URL'];
    if (substr($tmp, -1) != "/") {
        $tmp .= "/";
    }
    $p = substr($tmp, strlen(dirname($_SERVER['SCRIPT_NAME'])) + 1); // if URL = "localhost/APP-INFO/public/a/", give "a/"
} else {
    $p = "home";
}
URL::setUrlBase(substr($_SERVER['SCRIPT_NAME'], 0, strlen($_SERVER['SCRIPT_NAME']) - 9));
// appUrls
$appUrls = Routes::getRoutes();
foreach ($appUrls as $path => &$arrayExecution) {
    if (Regex::urlMatch($p, $path)) {
        $argvClass = [$_SESSION['settings']['language']];
        $argvClass = array_merge($argvClass, Regex::getIdsFromUrl($p));
        if (isset($arrayExecution[1])) {
            $argvClass = array_merge($argvClass, $arrayExecution[1]);
        }
        $page = new $arrayExecution[0](...$argvClass);
        break;
    }
}
// default 404
if (!isset($page)) {
    $page = new Status404Page($_SESSION['settings']['language']);
}
// display
$page->render();