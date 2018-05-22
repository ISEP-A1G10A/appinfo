<?php

class SettingsPage extends AppPage {

    private $id;

    public function __construct($lang, $id) {
        $this->initilization("settings", $lang, "connected");
        $this->addToCssFiles([
            "settings/settings.css"
        ]);
        $this->id = $id;
    }


    protected function renderContent() {
        require "../app/views/app/settings/settingsPage.php";
    }

}