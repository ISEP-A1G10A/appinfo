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
        if ($this->isValid()) {
            // TODO : VERIFY CREDENTIALS
            $this->addError(["connection", "wrong_credentials"]);
        }
        $_SESSION["errors"]["connection"] = $this->getErrors();
    }

    public function getRedirectionPage() {
        return "home";
    }
}