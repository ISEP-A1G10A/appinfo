<?php
// pages
$main = [
    "language" => "fr"
];
$homePage = [
    "title" => "accueil",
    "section0_domisep" => "La Domotique vue par Domisep",
    "section0_description" => "Domisep est une entreprise qui permet un contrôle sécurisé et ergonomique de toute habitation",
    "section0_learn_more" => "En savoir plus",
    "nav_sticky_features" => "Fonctionnalités",
    "nav_sticky_register" => "S'inscrire",
    "nav_sticky_clients" => "Nos clients"
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
    "submit"                       => "valider",
    "placeholder_email_wrong"      => "Veuillez entrer un email",
    "placeholder_password_wrong"   => "Veuillez entrer un mot de passe",
    "placeholder_first_name_wrong" => "Veuillez entrer votre prénom",
    "placeholder_last_name_wrong"  => "Veuillez entrer votre nom",
    "placeholder_phone_wrong"      => "Veuillez entrer votre numéro de téléphone"
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
$section1 = [
    "bloc1_title" => "Capter",
    "bloc1_description" => "Notre catalogue de capteurs: choisissez, ajoutez et retirez des capteurs de votre maison",
    "bloc2_title" => "Transférer",
    "bloc2_description" => "un transfert de données instantanné",
    "bloc3_title" => "Visualiser",
    "bloc3_description" => "accédez et personnalisez votre maison",
    "bloc4_title" => "Economie",
    "bloc4_description" => "Suivez votre consommation pour faire des économies",
    "bloc5_tile" => "Sécurité",
    "bloc5_description" => "La sécurité est un pilier fondateur de notre entreprise. Notre produit respecte la CNIL",
    "bloc6_title" => "Ecologie",
    "bloc6_description" => "Quotidiennement nous relevons de nouveaux défis écologiques"
];<?php echo ($this->s[$this->page]["bloc6_description"])?>
$section2 = [
  "section2_title" => "Processus d'inscription",
  "section2_subtitle1" => "Nous contacter",
  "section2_description1" => "Contactez nous par email (contact@luxo.com) ou par téléphone (+33 6 39 56 95 47)",
  "section2_subtitle2" => "Validez votre compte",
  "section2_description2" => "Après avoir pris contact avec nous, vous receverez un email avec un lien d'activation",
  "section2_subtitle3" => "Profitez de nos services",
  "section2_description3" => "Connectez-vous et commencez tout de suite la personalisation de votre maison"
];
$section3 = [
    "section3_title" => "Connectez-vous et commencez tout de suite la personalisation de votre maison",
    "section3_people1" => "James Vaugirard",
    "section3_commentary1" => "Excellent service. Utilisation très facile. Entreprise très réactive",
    "section3_people2" => "Isabelle Durand",
    "section3_commentary2" => "Site très facile à prendre en main. Très utile notamment quand nous partons en vacances !",
    "section3_people3" => "Daniel Dupont",
    "section3_commentary3" => "Bon service, de nombreux choix de personnalisation. Je recommande vivement."
];
// array
return [
    "main" => $main,
    "home" => $homePage,
    "signIn" => $signInPage,
    "profile"    => $profilePage,
    "help" => $helpPage,
    "logs" => $logsPage,
    "404" => $status404Page,
    "formErrors" => $formErrors,
    "navs"       => $navs,
    "footer"     => $footer
];