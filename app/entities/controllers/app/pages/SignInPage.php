<?php

class SignInPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("signIn", $lang);
        $this->addToCssFiles([
           "signIn/signIn.css"
        ]);
    }

    protected  function renderContent() {
        require "../app/views/app/signIn/signInPage.php";
    }
}