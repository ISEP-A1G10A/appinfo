<?php

class HomePage extends AppPage {
    public function __construct($lang) {
        $this->initilization("home", $lang);
        $this->addToCssFiles([
            "homePage/homePage.css",
            "homePage/section1.css",
            "homePage/section2.css",
            "homePage/section3.css"
        ]);
    }

    protected function renderContent() {
        require "../app/views/app/home/homePage.php";
    }
}