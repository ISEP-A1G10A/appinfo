<?php
if (!isset($_SESSION)) {
    session_start();
}
require "verificationFunctions.php";

class ForgotForm extends Form {
    public function __construct() {
        $this->method = "POST";
        $this->addToVerifications([
            new Verification("POST", "email", [
                [function ($toTest) { return isEmpty($toTest); }, "Forgot", "email_empty"],
                [function ($toTest) { return !isEmail($toTest); }, "Forgot", "email_not_valid"]
            ])
        ]);
        $this->runVerifications();
        if ($this->isValid()) {
            $response = UserTable::getUserOrError($this->getValue("email"));
            if ($response[0] === "success") {
                $_SESSION["user"]["id"] = $response[1]["id"];
                $_SESSION["user"]["role"] = UserTypeTable::getRoleByTypeId($response[1]["type"]);
            } else {
                $this->addError($response[1]);
            }
        }
        $_SESSION["errors"]["forgot"] = $this->getErrors();
    }

    public function getRedirectionPage() {
        return "home";
    }
}