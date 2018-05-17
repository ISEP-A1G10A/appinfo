<?php

class HomePage extends AppPage {
    public function __construct($lang) {
        $this->initilization("home", $lang);
        $this->addToCssFiles([
            "home/homePage.css",
            "home/section1.css",
            "home/section2.css",
            "home/section3.css"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/home/homePage.php";
    }
}