<?php

function isEmpty($toTest) {
    return $toTest === "";
}

function isEmail($toTest) {
    return filter_var($toTest, FILTER_VALIDATE_EMAIL);
}