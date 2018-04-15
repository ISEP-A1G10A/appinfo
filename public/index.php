<?php
// FUNCTIONS
function getPage($routes, $p) {
    foreach ($routes as $path => &$arrayExecution) {
        if (Regex::urlMatch($p, $path)) {
            $argvClass = [$_SESSION['settings']['language']];
            $argvClass = array_merge($argvClass, Regex::getIdsFromUrl($p));
            if (isset($arrayExecution[1])) {
                $argvClass = array_merge($argvClass, $arrayExecution[1]);
            }
            return new $arrayExecution[0](...$argvClass);
        }
    }
    // default page
    return new Status404Page($_SESSION['settings']['language']);
}

function getPageAfterForm($p) {
    $routes = Routes::getFormRoutes();
    foreach ($routes as $path => &$arrayExecution) {
        if (Regex::urlMatch($p, "form/" . $path)) {
            $form = new $arrayExecution[0]($_SESSION['settings']['language']);
            return $form->getPage();
        }
    }
    return "404";
}

function handleForm() {
}

function handleAutoload() {
    require '../app/entities/Autoloader.php';
    autoloader::register();
}

function handleSession() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        //Logger::logConnection();
    }
}

function handleLanguage() {
    // get changement language
    if (isset($_POST['form']) && $_POST['form'] === "nav-showcase") {
        if (isset($_POST['en'])) {
            $_SESSION['settings']['language'] = "en";
        } else {
            $_SESSION['settings']['language'] = "fr";
        }
    }
    // default language
    if (!isset($_SESSION['settings']['language'])) {
        $_SESSION['settings']['language'] = 'fr';
    }
}

function handleUserRole() {
    if (isset($_SESSION['user']['role'])) {
        return $_SESSION['user']['role'];
    }
    return "showcase";
}

// SCRIPT
handleAutoload();
handleSession();
handleLanguage();
// init URL entity
URL::setUrlBase(substr($_SERVER['SCRIPT_NAME'], 0, strlen($_SERVER['SCRIPT_NAME']) - 9));
// default page
if (isset($_SERVER['REDIRECT_URL'])) { // ex: localhost/appinfo/public/home/
    $tmp = $_SERVER['REDIRECT_URL'];
    if (substr($tmp, -1) != "/") {
        $tmp .= "/";
    }
    $p = substr($tmp, strlen(dirname($_SERVER['SCRIPT_NAME'])) + 1); // if URL = "localhost/appinfo/public/a/", give "a/"
} else { // ex: localhost/appinfo/public/
    $p = "home";
}
$user_role = handleUserRole(); // to handle
if ($user_role === "admin_sys") {
    $page = getPage(Routes::getAdminSysRoutes(), $p);
} elseif ($user_role === "user_main" || $user_role === "user_secondary") {
    $page = getPage(Routes::getConnectedRoutes(), $p);
} else {
    $page = getPage(Routes::getShowcaseRoutes(), $p);
}
// render
$page->render();