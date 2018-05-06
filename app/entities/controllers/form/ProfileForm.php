<?php
if (!isset($_SESSION)) {
    session_start();
}
require "verificationFunctions.php";

class ProfileForm extends Form {
    public function __construct() {
        $this->method = "POST";
        $_SESSION["user"]["first_name"] = $this->getValue("first_name") ;
        $_SESSION["user"]["last_name"] = $this->getValue("last_name");
        $_SESSION["user"]["phone"] = $this->getValue("phone");
        $_SESSION["user"]["email"] = $this->getValue("email");
    }

    public function getRedirectionPage() {
        return "home";
    }
}