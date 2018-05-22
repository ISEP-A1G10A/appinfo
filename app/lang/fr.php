<?php
// pages
$main = [
    "language" => "fr"
];
$homePage = [
    "title"                => "accueil",
    "section0_domisep"     => "La Domotique vue par Domisep",
    "section0_description" => "Domisep est une entreprise qui permet un contrôle sécurisé et ergonomique de toute habitation",
    "section0_learn_more"  => "En savoir plus",
    "nav_sticky_features"  => "Fonctionnalités",
    "nav_sticky_register"  => "S'inscrire",
    "nav_sticky_clients"   => "Nos clients"
];
$signInPage = [
    "title"                      => "connexion",
    "forget_password"            => "Mot de passe oublié",
    "placeholder_email"          => "Email",
    "placeholder_email_wrong"    => "Veuillez entrer un email",
    "placeholder_password"       => "Mot de passe",
    "placeholder_password_wrong" => "Veuillez entrer un mot de passe"
];
$helpPage = [
    "title" => "Aide"
];
$profilePage = [
    "title"                        => "profil",
    "data_title"                   => "vos informations",
    "password_title"               => "changez votre mot de passse",
    "first_name"                   => "prénom",
    "last_name"                    => "nom",
    "old_password"                 => "ancien mot de passe",
    "password"                     => "nouveau mot de passe",
    "repeat_password"              => "répétez votre nouveau mot de passe",
    "email"                        => "email",
    "phone"                        => "numéro de téléphone",
    "reset"                        => "annuler",
    "submit"                       => "valider",
    "placeholder_email_wrong"      => "Veuillez entrer un email",
    "placeholder_password_wrong"   => "Veuillez entrer un mot de passe",
    "placeholder_first_name_wrong" => "Veuillez entrer votre prénom",
    "placeholder_last_name_wrong"  => "Veuillez entrer votre nom",
    "placeholder_phone_wrong"      => "Veuillez entrer votre numéro de téléphone"
];
$sensorsPage = [
    "title" => "capteurs",
    "rooms" => "liste des capteurs par piece: ",

];
$settingsPage = [
    "title" => "paramètres",

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
$formErrorsProfilePass = [
    "last_password_empty"   => "Veuillez entrer votre ancien mot de passe",
    "wrong_last_password"   => "Ancien mot de passe invalide",
    "password_empty"        => "Veuillez entrer un nouveau mot de passe",
    "repeat_password_empty" => "Veuillez répeter votre nouveau mot de passe",
    "passwords_not_match"   => "Les deux mots de passe ne sont pas identiques"
];
$formErrorsProfileInfos = [
    "first_name_empty"     => "Veuillez entrer un prenom",
    "first_name_not_valid" => "Veuillez entrer un prenom correct",
    "last_name_empty"      => "Veuillez entrer un nom",
    "last_name_not_valid"  => "Veuillez entrer un nom correct",
    "email_empty"          => "Veuillez entrer un email",
    "email_not_valid"      => "Veuillez entrer un email correct",
    "phone_empty"          => "Veuillez entrer un numero de telephone",
    "phone_not_valid"      => "Veuillez entrer un numero de telephone correct"
];
$formErrors = [
    "common"        => $formErrorsCommon,
    "connection"    => $formErrorsConnection,
    "profile-pass"  => $formErrorsProfilePass,
    "profile-infos" => $formErrorsProfileInfos
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
$footer = [
    "term_of_use"    => "Conditions générales",
    "privacy_policy" => "Politique de confidentialité"
];
// array
return [
    "main"       => $main,
    "home"       => $homePage,
    "signIn"     => $signInPage,
    "profile"    => $profilePage,
    "sensors"    => $sensorsPage,
    "settings"   => $settingsPage,
    "help"       => $helpPage,
    "logs"       => $logsPage,
    "404"        => $status404Page,
    "formErrors" => $formErrors,
    "navs"       => $navs,
    "footer"     => $footer
];