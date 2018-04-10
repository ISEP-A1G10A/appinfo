<?php

class HomePage extends AppPage {
    public function __construct($lang) {
        $this->initilization("home", $lang);
        $this->addToCssFiles([
            "homePage/homePage.css",
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/homePage.php";
    }
}