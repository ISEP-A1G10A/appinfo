<?php
require "../app/db/api/functions.php";

class TestPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("members", $lang, "showcase");
    }


    protected function renderContent() {
        getFrames();
    }
}