<?php
require "verificationFunctions.php";

class MembersPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("members", $lang, "adminsav");
        if (isset($_POST["form"]) && $_POST["form"] === "members") {
            if (!isset($_POST["first_name"]) || isEmpty($_POST["first_name"])) {
                $this->errors["first_name_empty"] = $this->s["formErrors"]["profile-infos"]["first_name_empty"];
            } elseif (!isName($_POST["first_name"])) {
                $this->errors["first_name_not_valid"] = $this->s["formErrors"]["profile-infos"]["first_name_not_valid"];
            }
            if (!isset($_POST["last_name"]) || isEmpty($_POST["last_name"])) {
                $this->errors["last_name_empty"] = $this->s["formErrors"]["profile-infos"]["last_name_empty"];
            } elseif (!isName($_POST["last_name"])) {
                $this->errors["last_name_not_valid"] = $this->s["formErrors"]["profile-infos"]["last_name_not_valid"];
            }
            if (!isset($_POST["email"]) || isEmpty($_POST["email"])) {
                $this->errors["email_empty"] = $this->s["formErrors"]["profile-infos"]["email_empty"];
            } elseif (!isEmail($_POST["email"])) {
                $this->errors["email_not_valid"] = $this->s["formErrors"]["profile-infos"]["email_not_valid"];
            }
            if (!isset($_POST["phone"]) || isEmpty($_POST["phone"])) {
                $this->errors["phone_empty"] = $this->s["formErrors"]["profile-infos"]["phone_empty"];
            } elseif (!isPhone($_POST["phone"])) {
                $this->errors["phone_not_valid"] = $this->s["formErrors"]["profile-infos"]["phone_not_valid"];
            }
            if ($this->errors === []) {
                UserTable::AddMembers($_POST['first_name'], $_POST['last_name'], $_POST['type'], $_POST['email'], $_POST['phone']);
            }
        }
        $this->addToCssFiles([
            "members/membersPage.css"
        ]);
        $this->addToJsFiles([
            "members/membersPage.js"
        ]);
    }

    private $members;

    protected function renderContent() {
        $this->members = UserTable::getAll();
        require "../app/views/app/members/membersPage.php";

    }


    /*
        ERRORS
    */
    public function displayErrors() {
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
            return $this->s[$this->page]["email"];
        }
    }
    /*
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
    */
    // FIRST NAME

    private function isErrorFirstName() {
        return isset($this->errors["first_name_empty"]);
    }

    private function gotErrorFirstName() {
        if ($this->isErrorFirstName()) {
            echo " error";
        }
    }

    private function getPlaceholderFirstName() {
        if ($this->isErrorFirstName()) {
            return $this->s[$this->page]["placeholder_first_name_wrong"];
        } else {
            return $this->s[$this->page]["first_name"];
        }
    }

    // LAST NAME

    private function isErrorLastName() {
        return isset($this->errors["last_name_empty"]);
    }

    private function gotErrorLastName() {
        if ($this->isErrorLastName()) {
            echo " error";
        }
    }

    private function getPlaceholderLastName() {
        if ($this->isErrorLastName()) {
            return $this->s[$this->page]["placeholder_last_name_wrong"];
        } else {
            return $this->s[$this->page]["last_name"];
        }
    }

    // PHONE

    private function isErrorPhone() {
        return isset($this->errors["phone_empty"]);
    }

    private function gotErrorPhone() {
        if ($this->isErrorPhone()) {
            echo " error";
        }
    }

    private function getPlaceholderPhone() {
        if ($this->isErrorPhone()) {
            return $this->s[$this->page]["placeholder_phone_wrong"];
        } else {
            return $this->s[$this->page]["phone"];
        }
    }

}