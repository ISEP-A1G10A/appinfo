<?php

abstract class AppPage extends Page {
    protected abstract function renderContent();

    private $cssFiles = [
    ];
    private $jsFiles = [
    ];
    private $admin;
    protected $page;

    /** Call during children's contruction
     * @param $lang string ex: "fr"
     * @param $admin boolean
     */
    protected function initilization($page, $lang, $admin = false) {
        $this->page = $page;
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
        require "../app/views/app/default.php";
    }
}