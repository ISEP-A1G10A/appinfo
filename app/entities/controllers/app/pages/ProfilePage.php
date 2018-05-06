<?php

class ProfilePage extends AppPage {
    private $data;

    public function __construct($lang) {
        $this->initilization("profile", $lang, "connected");
        if (isset($_POST["form"]) && $_POST["form"] === "profile") {
            $this->initializationForm("profile", ProfileForm::class);
        }
        $this->addToCssFiles([
            "profile/profile.css"
        ]);
    }

    protected function renderContent() {
        $table = UserTable::getAllAllById($_SESSION['user']['id']);
        if(count($table) == 1){
            $this->data = UserTable::getAllAllById($_SESSION['user']['id'])[0];
            require "../app/views/app/profile/profilePage.php";
        }
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
            return $this->s[$this->page]["email"];
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