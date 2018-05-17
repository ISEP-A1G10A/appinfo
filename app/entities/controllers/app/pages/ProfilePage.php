<?php
require "verificationFunctions.php";

class ProfilePage extends AppPage {
    protected $errors = [];

    public function __construct($lang) {
        $this->initilization("profile", $lang, "connected");
        if (isset($_POST["form"]) && $_POST["form"] === "profile-infos") {
            if (!isset($_POST["first_name"]) || isEmpty($_POST["first_name"])) {
                $this->errors["first_name_empty"] = $this->s["formErrors"]["profile-infos"]["first_name_empty"];
            }
        }
        if ($this->errors === []) {
            UserTable::setAllById($_SESSION["user"]["id"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["phone"]);
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