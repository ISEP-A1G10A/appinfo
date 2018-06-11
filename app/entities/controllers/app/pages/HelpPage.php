<?php
require "verificationFunctions.php";

class HelpPage extends AppPage {

    protected $errors = [];

    public function __construct($lang) {
        $this->initilization("help", $lang, "connected");
        $this->addToCssFiles([
            "help/help.css"
        ]);
        $this->addToJsFiles([
           "help/help.js"
        ]);

        /*if(isset($_POST["action"]) && isEmpty($_POST["action"] === "sendMessage")) {
            $this->errors["message_empty"] = $this->s["formErrors"]["help"]["message_empty"];
        }else*/if(isset($_POST["action"]) && $_POST["action"] === "sendMessage"){
            $this->addMessage($_POST["user"], $_POST["object"], $_POST["content"]);
        }
    }

    protected function renderContent() {
        require "../app/views/app/help/helpPage.php";
    }

    public function addMessage($user, $object, $content){
        MessageTable::addMessage($user, $object, $content);
    }

    private function displayErrors() {
        if (isset($_POST["action"]) && $_POST["action"] === "sendMessage") {
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
