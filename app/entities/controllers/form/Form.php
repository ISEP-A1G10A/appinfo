<?php

abstract class Form {
    protected $lang;

    public function __construct($lang) {
        $this->lang = $lang;
    }

    public abstract function getPage();
}