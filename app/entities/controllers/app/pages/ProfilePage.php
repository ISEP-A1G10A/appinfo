<?php
require "verificationFunctions.php";

class ProfilePage extends AppPage {
    protected $errors = [];

    public function __construct($lang) {
        $this->initilization("profile", $lang, "connected");
        if (isset($_POST["form"]) && $_POST["form"] === "profile-infos") {
            if (!isset($_POST["first_name"]) || isEmpty($_POST["first_name"])) {
                    $this->errors["first_name_empty"] = $this->s["formErrors"]["profile-infos"]["first_name_empty"];
            }elseif (!isName($_POST["first_name"])){
                $this->errors["first_name_not_valid"] = $this->s["formErrors"]["profile-infos"]["first_name_not_valid"];
            }

            if (!isset($_POST["last_name"]) || isEmpty($_POST["last_name"])) {
                    $this->errors["last_name_empty"] = $this->s["formErrors"]["profile-infos"]["last_name_empty"];
            }elseif (!isName($_POST["last_name"])){
                $this->errors["last_name_not_valid"] = $this->s["formErrors"]["profile-infos"]["last_name_not_valid"];
            }

            if (!isset($_POST["email"]) || isEmpty($_POST["email"])) {
                    $this->errors["email_empty"] = $this->s["formErrors"]["profile-infos"]["email_empty"];
            }elseif (!isEmail($_POST["email"])){
                $this->errors["email_not_valid"] = $this->s["formErrors"]["profile-infos"]["email_not_valid"];
            }

            if (!isset($_POST["phone"]) || isEmpty($_POST["phone"])) {
                    $this->errors["phone_empty"] = $this->s["formErrors"]["profile-infos"]["phone_empty"];
            }elseif (!isPhone($_POST["phone"])){
                $this->errors["phone_not_valid"] = $this->s["formErrors"]["profile-infos"]["phone_not_valid"];
            }

            if ($this->errors === []) {
                UserTable::setAllById($_SESSION["user"]["id"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["phone"]);
            }
        }
        if (isset($_POST["form"]) && $_POST["form"] === "profile-pass") {
            if (!isset($_POST["old_password"]) || isEmpty($_POST["old_password"])) {
                $this->errors["old_password_empty"] = $this->s["formErrors"]["profile-pass"]["last_password_empty"];
            } elseif (!isOldPass($_POST["old_password"])) {
                $this->errors["old_password_not_valid"] = $this->s["formErrors"]["profile-pass"]["wrong_last_password"];
            }

            if (!isset($_POST["password"]) || isEmpty($_POST["password"])) {
                $this->errors["password_empty"] = $this->s["formErrors"]["profile-pass"]["password_empty"];
            }

            if (!isset($_POST["repeat_password"]) || isEmpty($_POST["repeat_password"])) {
                $this->errors["repeat_password_empty"] = $this->s["formErrors"]["profile-pass"]["repeat_password_empty"];
            } elseif (!isPassMatch($_POST["repeat_password"], $_POST["password"])) {
                $this->errors["passwords_not_match"] = $this->s["formErrors"]["profile-pass"]["passwords_not_match"];
            }

            if ($this->errors === []) {
                UserTable::setPassById($_SESSION["user"]["id"], $_POST["password"]);
            }

        }
        $this->addToCssFiles([
            "profile/profile.css"
        ]);
    }

    private $user;

    protected function renderContent() {
        $this->user = UserTable::getAllAllById($_SESSION['user']['id'])[0];
        require "../app/views/app/profile/profilePage.php";
    }

    /*
        ERRORS
    */
    private function displayErrors($form) {
        if (isset($_POST["form"]) && $_POST["form"] === "profile-" . $form) {
            $errorTexts = [];
            $display = false;
            foreach ($this->errors as $name => $text) {
                $display = true;
                array_push($errorTexts, "<span class='design-form-error'><img class='design-form-error-logo' src='" . new URL("img/icons/cancel.png") . "'>" . $text . "</span>");
            }
            if ($display) {
                echo "<div class='design-form-errors profile-form-errors'>";
                foreach ($errorTexts as $errorText) {
                    echo $errorText;
                }
                echo "</div>";
            }
        }
    }
}