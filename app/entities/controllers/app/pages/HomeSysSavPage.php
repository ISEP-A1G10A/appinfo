<?php

class HomeSysSavPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("home", $lang, "adminsav");
    }

    protected function renderContent() {
//        echo "home adminsav";
    }
}