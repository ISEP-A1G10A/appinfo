<?php

class ForgotPasswordPage extends AppPage {

    public function __construct($lang) {
        $this->initilization("forgot-password", $lang);


        if(isset($_POST["action"]) && $_POST["action"] === "sendRecovery"){
            /*if account exists*/
            var_dump('yo');
            die();
            mail($_POST["email"], $_POST["subject"], $_POST["message"]);
        }

        $this->addToCssFiles([
            "forgotPass/forgotPass.css"
        ]);

        $this->addToJsFiles([
            "forgotPass/forgotPass.js"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/forgotPass/forgotPass.php";
    }
}