<?php

abstract class AppPage extends Page {

    private $cssFiles = [
    ];
    private $jsFiles = [
    ];
    private $admin;

    /** Call during children's contruction
     * @param $lang string ex: "fr"
     * @param $admin boolean
     */
    protected function initilization($lang, $admin = false) {
        $this->initializationStrings($lang);
        $this->addToCssFiles($this->cssFiles);
        $this->addToJsFiles($this->jsFiles);
        $this->admin = $admin;
    }

    /**
     * Render nav between admin and default
     */
    protected function renderNav() {
        if ($this->admin) {
            // require nav admin
        } else {
            // require nav default
        }
    }

    /**
     * Render method
     */
    public function render() {
        // require content
    }
}