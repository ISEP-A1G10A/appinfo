<?php

abstract class Form {

    public abstract function getPage();

    private $verifications = [];

    protected function addToVerifications($toAdd) {
        $this->verifications = array_merge($this->verifications, $toAdd);
    }

    protected function runVerifications() {
        $error = false;
        foreach ($this->verifications as $verification) {
            if ($verification->run()) {
                $error = true;
            }
        }
        return $error;
    }
}