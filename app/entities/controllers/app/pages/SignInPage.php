<?php

class SignInPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("signIn", $lang);
        if (isset($_POST["form"]) && $_POST["form"] === "connection") {
            $this->initializationForm("connection", ConnectionForm::class);
        }
        $this->addToCssFiles([
            "signIn/signIn.css"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/signIn/signInPage.php";
    }

    /*
        ERRORS
    */
    private function displayErrors() {
        foreach ($this->errors as $name => $text) {
            if (!endswith($name, "_empty")) {
                echo "<span class='design-form-error'>" . $text . "</span>";
            }
        }
    }

    // EMAIL
    private function isErrorEmail() {
        return isset($this->errors["email_empty"]) || isset($this->errors["email_not_valid"]);
    }

    private function gotErrorEmail() {
        if ($this->isErrorEmail()) {
            echo " error";
        }
    }

    private function getPlaceholderEmail() {
        if ($this->isErrorEmail()) {
            return $this->s[$this->page]["placeholder_email_wrong"];
        } else {
            return $this->s[$this->page]["placeholder_email"];
        }
    }

    // PASSWORD
    private function isErrorPassword() {
        return isset($this->errors["password_empty"]);
    }

    private function gotErrorPassword() {
        if ($this->isErrorPassword()) {
            echo " error";
        }
    }

    private function getPlaceholderPassword() {
        if ($this->isErrorPassword()) {
            return $this->s[$this->page]["placeholder_password_wrong"];
        } else {
            return $this->s[$this->page]["placeholder_password"];
        }
    }
}