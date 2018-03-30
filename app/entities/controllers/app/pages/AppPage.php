<?php

abstract class AppPage extends Page {

    protected $s = [];

    private $cssFiles = [
    ];
    private $jsFiles = [
    ];
    private $admin;

    /** Call during children's contruction
     * @param $lang string
     * @param $admin boolean
     */
    protected function initilization($lang, $admin = false) {
        $this->s = Lang::getStrings($lang);
        $this->requireStrings($lang);
        $this->addToCssFiles($this->cssFiles);
        $this->addToJsFiles($this->jsFiles);
        $this->admin = $admin;
    }

    /** Load strings
     * @param $lang string
     */
    private function requireStrings($lang) {
        try {
            if (file_exists('../app/lang/' . $lang . 'php')) {
                $this->s = require '../../../../lang/' . $lang . '.php';
            } else {
                throw new FileNotFindException("");
            }
        } catch (FileNotFindException $exception) {

        }

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