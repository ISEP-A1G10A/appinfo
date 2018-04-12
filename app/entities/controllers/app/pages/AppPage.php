<?php

abstract class AppPage extends Page {
    protected abstract function renderContent();

    private $cssFiles = [
        "design/designButtons.css",
        "design/designForm.css",
        "design/designTextInput.css",
    ];
    private $jsFiles = [
        "design/designButtons.js",
        "design/designTextInput.js",
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
            require "../app/views/app/nav/navShowcase.php";
        }
    }

    /**
     * Render method
     */
    public function render() {
        require "../app/views/app/default.php";
    }
}