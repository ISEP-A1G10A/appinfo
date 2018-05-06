<?php
// pages
$main = [
    "language" => "fr"
];
$homePage = [
    "title" => "accueil",
    "Home automation seen by Domisep" => "La Domotique vue par Domisep",
    "Domisep is a company that allows a secure and ergonomic control of any home" => "Domisep est une entreprise qui permet un contrôle sécurisé et ergonomique de toute habitation",
    "Learn more" => "En savoir plus",
    "Features" => "Fonctionnalités",
    "Register" => "S'inscrire",
    "Our clients" => "Nos clients"
];
$signInPage = [
    "title" => "connexion",
    "forget_password" => "Mot de passe oublié",
    "placeholder_email" => "Email",
    "placeholder_email_wrong" => "Veuillez entrer un email",
    "placeholder_password" => "Mot de passe",
    "placeholder_password_wrong" => "Veuillez entrer un mot de passe"
];
$helpPage = [
    "title" => "Aide"
];
$logsPage = [
    "title" => "logs",
    "date" => "date",
    "hour" => "heure",
    "type" => "type",
    "session-id" => "session ID",
    "ip-address" => "adresse IP",
    "value" => "valeur",
    "search" => "rechercher"
];
$status404Page = [
    "title" => "404 - Page introuvable",
    "not_found" => "Page non trouvée"
];
// forms
$formErrorsCommon = [
];
$formErrorsConnection = [
    "email_empty" => "Veuillez entrer votre email",
    "email_not_valid" => "Veuillez entrer un email valide",
    "no_user_with_given_email" => "Email invalide",
    "password_empty" => "Veuillez entrer votre mot de passe",
    "wrong_password" => "Mot de passe invalide"
];
$formErrors = [
    "common" => $formErrorsCommon,
    "connection" => $formErrorsConnection
];
// nav
$navShowcase = [
    "connection" => "connexion"
];
$navConnected = [
    "home" => "tableau de bord",
    "deconnection" => "deconnexion",
    "houses" => "maisons",
    "settings" => "paramètres",
    "sensors" => "capteurs",
    "profile" => "profil",
    "help" => "aide"
];
$navAdminSys = [
    "home" => "tableau de bord",
    "deconnection" => "deconnexion",
    "logs" => "logs",
    "logs_debug" => "logs debug"
];
$navs = [
    "showcase" => $navShowcase,
    "connected" => $navConnected,
    "adminsys" => $navAdminSys
];
$footer = [
    "term_of_use"    => "Conditions générales",
    "privacy_policy" => "Politique de confidentialité"
];
// array
return [
    "main" => $main,
    "home" => $homePage,
    "signIn" => $signInPage,
    "help" => $helpPage,
    "logs" => $logsPage,
    "404" => $status404Page,
    "formErrors" => $formErrors,
    "navs"       => $navs,
    "footer"     => $footer
];