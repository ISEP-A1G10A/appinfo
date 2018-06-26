<?php
require "../app/db/api/functions.php";

class TestPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("members", $lang, "showcase");
        $this->addToJsFiles([
            "test/test.js"
        ]);
        $this->addToCssFiles([
            "test/test.css"
        ]);
    }


    protected function renderContent() {
        getFrames();

        require "../app/views/app/test/testPage.php";
    }
}