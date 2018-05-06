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
$profilePage = [
    "data_title"                   => "vos informations",
    "password_title"               => "changez votre mot de passse",
    "first_name"                   => "prénom",
    "last_name"                    => "nom",
    "old_password"                 => "ancien mot de passe",
    "password"                     => "nouveau mot de passe",
    "repeat_password"              => "répétez votre nouveau mot de passe",
    "email"                        => "email",
    "phone"                        => "numéro de téléphone",
    "submit"                       => "valider",
    "placeholder_email_wrong"      => "Veuillez entrer un email",
    "placeholder_password_wrong"   => "Veuillez entrer un mot de passe",
    "placeholder_first_name_wrong" => "Veuillez entrer votre prénom",
    "placeholder_last_name_wrong"  => "Veuillez entrer votre nom",
    "placeholder_phone_wrong"      => "Veuillez entrer votre numéro de téléphone"
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
    "home"         => "tableau de bord",
    "deconnection" => "deconnexion",
    "houses"       => "maisons",
    "settings"     => "paramètres",
    "sensors"      => "capteurs",
    "profile"      => "profil",
    "help"         => "aide"
];
$navAdminSys = [
    "home"         => "tableau de bord",
    "deconnection" => "deconnexion",
    "logs"         => "logs",
    "logs_debug"   => "logs debug"
];
$navs = [
    "showcase"  => $navShowcase,
    "connected" => $navConnected,
    "adminsys"  => $navAdminSys
];
// array
return [
    "main"       => $main,
    "home"       => $homePage,
    "profile"    => $profilePage,
    "signIn"     => $signInPage,
    "logs"       => $logsPage,
    "404"        => $status404Page,
    "formErrors" => $formErrors,
    "navs"       => $navs
];