<?php

class HomePage extends AppPage {
    public function __construct($lang) {
        $this->initilization($lang);
        echo ucfirst($this->s['home']['title']) . '<br>';
    }
}