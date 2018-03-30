<?php

abstract class CustomException extends Exception {
    protected abstract function getName();

    public function __construct($code = 0, Exception $previous = null) {
        Logger::logException($this->getName());
    }

    public function __toString() {
        return $this->getName() . (isset($this->message) && $this->message !== "" ? ": {$this->message}" : "") . "\n";
    }
}