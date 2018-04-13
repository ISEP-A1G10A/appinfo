<?php

class Verification {
    private $method, $name, $functions;

    /**
     * Verification constructor.
     * @param $method
     * @param $name
     * @param $functions
     */
    public function __construct($method, $name, $functions) {
        $this->method = $method;
        $this->name = $name;
        $this->functions = $functions;
    }

    public function run() {
        $errors = [];
        try {
            if ($this->method === "GET") {
                if (isset($_GET[$this->name])) {
                    $value = $_GET[$this->name];
                } else {
                    array_push($errors, [$this->functions[0][1], $this->functions[0][2]]);
                }
            } elseif ($this->method === "POST") {
                if (isset($_POST[$this->name])) {
                    $value = $_POST[$this->name];
                } else {
                    array_push($errors, [$this->functions[0][1], $this->functions[0][2]]);
                }
            } else {
                throw new MethodNotSupportedException($this->method);
            }
        } catch (MethodNotSupportedException $exception) {
        }
        if (isset($value)) {
            foreach ($this->functions as $function) {
                if ($function[0]($value)) {
                    array_push($errors, [$function[1], $function[2]]);
                    return $errors;
                }
            }
        }
        return $errors;
    }
}