<?php
if (!isset($_SESSION)) {
    session_start();
}
require "verificationFunctions.php";

class ConnectionForm extends Form {
    public function __construct() {
        $this->method = "POST";
        $this->addToVerifications([
            new Verification("POST", "email", [
                [function ($toTest) { return isEmpty($toTest); }, "connection", "email_empty"],
                [function ($toTest) { return !isEmail($toTest); }, "connection", "email_not_valid"],
            ]),
            new Verification("POST", "password", [
                [function ($toTest) { return isEmpty($toTest); }, "connection", "password_empty"],
            ])
        ]);
        $this->runVerifications();
        $_SESSION["errors"]["connection"] = $this->getErrors();
        // if valid action
    }

    public function getRedirectionPage() {
        return "home";
    }
}