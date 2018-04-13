<?php
if (!isset($_SESSION)) {
    session_start();
}
require "verificationFunctions.php";

class ConnectionForm extends Form {
    private $error;

    public function __construct($lang) {
        $this->addToVerifications([
            new Verification($lang, "POST", "email", [
                [function ($toTest) {return isEmpty($toTest);}, "connection", "email_empty"],
                [function ($toTest) {return !isEmail($toTest);}, "connection", "email_not_valid"],
            ]),
            new Verification($lang, "POST", "password", [
                [function ($toTest) {return isEmpty($toTest);}, "connection", "password_empty"],
            ])
        ]);
        $_SESSION["errors"]["connection"] = $this->runVerifications();
    }

    public function getPage() {
        if ($this->error !== []) {
            return "sign-in";
        } else {
            return "home";
        }
    }
}