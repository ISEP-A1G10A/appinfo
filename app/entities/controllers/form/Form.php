<?php

abstract class Form {
    protected $method;

    public abstract function getRedirectionPage();

    private $verifications = [];

    protected function addToVerifications($toAdd) {
        $this->verifications = array_merge($this->verifications, $toAdd);
    }

    private $errors = [];

    protected function runVerifications() {
        foreach ($this->verifications as $verification) {
            $this->errors = array_merge($this->errors, $verification->run());
        }
    }

    protected function getErrors() {
        return $this->errors;
    }

    public function isValid() {
        return $this->errors === [];
    }

    public function redirect() {
        header("Location: http://localhost/appinfo/public/" . $this->getRedirectionPage() . "/");
        die();
    }

    public function getValue($name) {
        try {
            if ($this->method === "POST") {
                if (isset($_POST[$name])) {
                    return strip_tags($_POST[$name]);
                }
            } elseif ($this->method === "GET") {
                if (isset($_GET[$name])) {
                    return strip_tags($_GET[$name]);
                }
            } else {
                throw new MethodNotSupportedException($this->method);
            }
        } catch (MethodNotSupportedException $exception) {
        }
        return "";
    }
}
