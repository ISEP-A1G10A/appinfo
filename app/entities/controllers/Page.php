<?php

abstract class Page {
    public abstract function render();

    private $cssFiles = [
        "font.css",
        "default.css",
    ];

    protected function addToCssFiles($files) {
        $this->cssFiles = array_merge($this->cssFiles, $files);
    }

    protected function displayCssFiles() {
        foreach ($this->cssFiles as $file) {
            echo '<link rel="stylesheet" href="' . new URL("css/" . $file) . '">';
        }
    }

    private $jsFiles = [
        "jquery-3.2.1.min.js",
    ];

    protected function addToJsFiles($files) {
        $this->jsFiles = array_merge($this->jsFiles, $files);
    }

    protected function displayJsFiles() {
        foreach ($this->jsFiles as $file) {
            echo '<script type="application/javascript" src="' . new URL("js/" . $file) . '"></script>';
        }
    }

    protected $s = [];

    protected function initializationStrings($lang) {
        $this->s = Lang::getStrings($lang);
    }
}