<?php

class HelpPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("help", $lang, "connected");
        $this->addToCssFiles([
            "help/help.css"

        ]);
    }

    protected function renderContent() {
        require "../app/views/app/help/helpPage.php";
    }
}
