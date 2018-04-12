<?php

class Verification {
    private $lang, $method, $name, $functions;

    /**
     * Verification constructor.
     * @param $lang
     * @param $method
     * @param $name
     * @param $functions
     */
    public function __construct($lang, $method, $name, $functions) {
        $this->lang = $lang;
        $this->method = $method;
        $this->name = $name;
        $this->functions = $functions;
    }

    public function run() {
        $error = false;
        try {
            if ($this->method === "GET") {
                if (isset($_GET[$this->name])) {
                    $value = $_GET[$this->name];
                } else {
                    // TODO : call notifications->new($this->getError($this->functions["isEmpty"]))
                    $error = true;
                }
            } elseif ($this->method === "POST") {
                if (isset($_POST[$this->name])) {
                    $value = $_POST[$this->name];
                } else {
                    // TODO : call notifications->new($this->getError($this->functions["isEmpty"]))
//                    Logger::logDebug("verification_error " . $this->getError($this->functions["isEmpty"]));
                    $error = true;
                }
            } else {
                throw new MethodNotSupportedException($this->method);
            }
        } catch (MethodNotSupportedException $exception) {
        }
        if (isset($value)) {
            foreach ($this->functions as $function) {
                if ($function[0]($value)) {
                    // TODO : call notifications->new($this->getError($errorArray)) <--- need modifications
                    $error = true;
                }
            }
        }
        return $error;
    }

    private function getError($errorArray) {
        return Lang::getStrings($this->lang)["formErrors"][$errorArray[0]][$errorArray[1]];
    }
}