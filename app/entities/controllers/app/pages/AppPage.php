<?php
if (!isset($_SESSION)) {
    session_start();
}

abstract class AppPage extends Page {
    protected abstract function renderContent();

    private $cssFiles = [
        "design/designButtons.css",
        "design/designForm.css",
        "design/designMobileNav.css",
        "design/designSideNav.css",
        "design/designTabs.css",
        "design/designTextInput.css",
        "design/designTopNav.css",
        "nav/navShowcase.css",
        "nav/navConnectedWeb.css",
        "nav/navConnectedMobile.css"
    ];
    private $jsFiles = [
        "design/designButtons.js",
        "design/designMobileNav.js",
        "design/designSideNav.js",
        "design/designTabs.js",
        "design/designTextInput.js",
    ];
    private $section;
    protected $page;

    /** Call during children's contruction
     * @param $page
     * @param $lang string ex: "fr"
     * @param string $section
     */
    protected function initilization($page, $lang, $section = "showcase") {
        $this->page = $page;
        $this->initializationStrings($lang);
        $this->addToCssFiles($this->cssFiles);
        $this->addToJsFiles($this->jsFiles);
        $this->section = $section;
    }

    protected $forms = [];

    /** Create Form
     * @param $name
     * @param $formClass
     * @return mixed
     */
    protected function initializationForm($name, $formClass) {
        $form = new $formClass();
        $this->forms[$name] = $form;
        $this->initilizationErrors($name);
        if ($form->isValid()) {
            $form->redirect();
        }
        return $form;
    }

    protected function getFormValue($form, $name) {
        if (isset($this->forms[$form])) {
            return $this->forms[$form]->getValue($name);
        }
        return "";
    }

    protected $errors = [];

    /**
     * @param $category string lang traduction error category ex: "connection"
     */
    private function initilizationErrors($category) {
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
        if ($this->section === "adminsys") {
            require "../app/views/app/nav/navAdminSys/navAdminSys.php";
        } elseif ($this->section === "adminsav") {
            require "../app/views/app/nav/navAdminSav/navAdminSav.php";
        } elseif ($this->section === "connected") {
            require "../app/views/app/nav/navConnected/navConnected.php";
        } elseif ($this->section === "showcase") {
            require "../app/views/app/nav/navShowcase/navShowcase.php";
        }
    }

    /**
     * Render method
     */
    public function render() {
        require "../app/views/app/default.php";
    }
}