<?php
// pages
$main = [
    "language" => "fr"
];
$homePage = [
    "title" => "accueil"
];
$signInPage = [
    "title"                      => "connexion",
    "forget_password"            => "Mot de passe oublié",
    "placeholder_email"          => "Email",
    "placeholder_email_wrong"    => "Veuillez entrer un email",
    "placeholder_password"       => "Mot de passe",
    "placeholder_password_wrong" => "Veuillez entrer un mot de passe"
];
$logsPage = [
    "title"      => "logs",
    "date"       => "date",
    "hour"       => "heure",
    "type"       => "type",
    "session-id" => "session ID",
    "ip-address" => "adresse IP",
    "value"      => "valeur",
    "search"     => "rechercher"
];
$status404Page = [
    "title"     => "404 - Page introuvable",
    "not_found" => "Page non trouvée"
];
// forms
$formErrorsCommon = [
];
$formErrorsConnection = [
    "email_empty"              => "Veuillez entrer votre email",
    "email_not_valid"          => "Veuillez entrer un email valide",
    "no_user_with_given_email" => "Email invalide",
    "password_empty"           => "Veuillez entrer votre mot de passe",
    "wrong_password"           => "Mot de passe invalide"
];
$formErrors = [
    "common"     => $formErrorsCommon,
    "connection" => $formErrorsConnection
];
// nav
$navShowcase = [
    "connection" => "connexion"
];
$navConnected = [
    "connection" => "deconnexion",
    "houses" => "maisons",
    "settings" => "paramètres",
    "sensors" => "capteurs",
    "profile" => "profil",
    "help" => "aide"
];
$navs = [
    "showcase" => $navShowcase,
    "connected" => $navConnected
];
// array
return [
    "main"       => $main,
    "home"       => $homePage,
    "signIn"     => $signInPage,
    "logs"       => $logsPage,
    "404"        => $status404Page,
    "formErrors" => $formErrors,
    "navs"       => $navs
];