<?php

abstract class Form {

    public abstract function getPage();

    private $verifications = [];

    protected function addToVerifications($toAdd) {
        $this->verifications = array_merge($this->verifications, $toAdd);
    }

    protected function runVerifications() {
        $errors = [];
        foreach ($this->verifications as $verification) {
            $errors = array_merge($errors, $verification->run());
        }
        return $errors;
    }
}