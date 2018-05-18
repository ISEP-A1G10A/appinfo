<?php

function isEmpty($toTest) {
    return $toTest === "";
}

function isName($toTest){
    return preg_match("/^[A-Za-z\\- \']+$/",$toTest);
}

function isEmail($toTest) {
    return filter_var($toTest, FILTER_VALIDATE_EMAIL);
}

function isPhone($toTest) {
    return preg_match('~^\d{10}$~',$toTest);
}

function isOldPass($toTest){
    $pass = UserTable::getPassById($_SESSION["user"]["id"])[0]["password"];
    return Encryption::compare($toTest, $pass);
}

function isPassMatch($toTest, $toTestConfirm){
    return $toTest === $toTestConfirm;
}