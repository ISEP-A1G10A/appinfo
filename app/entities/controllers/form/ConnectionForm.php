<?php

class ConnectionForm extends Form {
    public function __construct($lang) { parent::__construct($lang); }

    public function getPage() {
        return "home";
    }
}