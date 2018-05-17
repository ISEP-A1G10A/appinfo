<?php

class MembersPage extends AppPage {
    public function __construct($lang) {
        $this->initilization("members", $lang, "adminsav");
        $this->addToCssFiles([
            "members/membersPage.css"
        ]);
        $this->addToJsFiles([
            "members/membersPage.js"
        ]);
    }

    private $members;
    protected function renderContent() {
        $this->members = UserTable::getAll();
        require "../app/views/app/members/membersPage.php";

    }
}