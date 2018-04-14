<?php
$main = [
    "language" => "en"
];
$homePage = [
    "title" => "home"
];
$signIn = [
];
$status404Page = [
];
$formErrorsCommon = [
];
$formErrorsConnection = [
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