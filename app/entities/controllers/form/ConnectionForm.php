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
            $response = UserTable::getUserOrError($this->getValue("email"), $this->getValue("password"));
            if ($response[0] === "success") {
                $_SESSION["user"]["id"] = $response[1]["id"];
                $_SESSION["user"]["role"] = UserTypeTable::getRoleByTypeId($response[1]["type"]);
                $_SESSION["user"]["houses"] = HomeTable::getAllIdsAndLabelsByMainUser($response[1]["id"]);
            } else {
            $this->addError($response[1]);
            }
        }
        $_SESSION["errors"]["connection"] = $this->getErrors();
    }

    public function getRedirectionPage() {
        return "home";
    }
}