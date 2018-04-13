<?php
if (!isset($_SESSION)) {
    session_start();
}

abstract class AppPage extends Page {
    protected abstract function renderContent();

    private $cssFiles = [
        "design/designButtons.css",
        "design/designForm.css",
        "design/designTextInput.css",
        "nav/navShowcase.css"
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

    protected $errors = [];

    protected function initilizationErrors($category) {
        if (isset($_SESSION["errors"][$category])) {
            foreach ($_SESSION["errors"][$category] as $error) {
                $this->errors = array_merge($this->errors, [$error[1] => $this->getErrorText($error)]);
            }
        }
    }

    /** Get error text in the right language
     * @param $error
     * @return mixed
     */
    private function getErrorText($error) {
        return $this->s["formErrors"][$error[0]][$error[1]];
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