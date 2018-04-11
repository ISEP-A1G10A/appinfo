<?php
$main = [
    "language" => "fr"
];
$homePage = [
    "title" => "accueil"
];
$signIn = [
    "title" => "connexion"
];
$status404Page = [
    "title"     => "404 - Page introuvable",
    "not_found" => "Page non trouvée"
];
$formErrorsCommon = [
];
$formErrorsConnection = [
    "email_empty" => "Veuillez entrer un email",
    "email_not_valid" => "Veuillez entrer un email valide"
];
$formErrors = [
    "common" => $formErrorsCommon,
    "connection" => $formErrorsConnection
];
return [
    "main"       => $main,
    "home"       => $homePage,
    "signIn"     => $signIn,
    "404"        => $status404Page,
    "formErrors" => $formErrors
];