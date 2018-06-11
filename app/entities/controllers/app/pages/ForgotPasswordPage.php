<?php

class ForgotPasswordPage extends AppPage {

    public function __construct($lang) {
        $this->initilization("forgot-password", $lang);

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