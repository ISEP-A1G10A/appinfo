<?php

class ForgotPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("forgotPassword", $lang);
        if (isset($_POST["form"]) && $_POST["form"] === "Forgot") {
            $this->initializationForm("Forgot", ForgotForm::class);
        }
         $this->addToCssFiles([
            "signIn/Forgot.css"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/forgotPassword/forgotPasswordPage.php";
    }

    /*
        ERRORS
    */
    private function displayErrors() {
        $errorTexts = [];
        $display = false;
        foreach ($this->errors as $name => $text) {
            if (!endswith($name, "_empty")) {
                $display = true;
                array_push($errorTexts, "<span class='design-form-error'><img class='design-form-error-logo' src='" . new URL("img/icons/cancel.png") . "'>" . $text . "</span>");
            }
        }
        if ($display) {
            echo "<div class='design-form-errors'>";
            foreach ($errorTexts as $errorText) {
                echo $errorText;
            }
            echo "</div>";
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
}