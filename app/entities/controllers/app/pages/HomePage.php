<?php

class HomePage extends AppPage {
    public function __construct($lang) {
        $this->initilization("home", $lang);
    }

    protected function renderContent() {
        echo "ok";
    }
}