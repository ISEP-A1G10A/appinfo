<?php
require "verificationFunctions.php";

class ConnectionForm extends Form {
    private $error;

    public function __construct($lang) {
        $this->addToVerifications([
            new Verification($lang, "POST", "email", [
                [function ($toTest) {return isEmpty($toTest);}, "connection", "email_empty"],
                [function ($toTest) {return !isEmail($toTest);}, "connection", "email_not_valid"],
            ]),
        ]);
        $this->error = $this->runVerifications();
    }

    public function getPage() {
        if ($this->error) {
            return "sign-in";
        } else {
            return "home";
        }
    }
}