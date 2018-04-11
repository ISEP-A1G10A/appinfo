<?php

class MethodNotSupportedException extends CustomException {
    public function __construct($method, $code = 0, Exception $previous = null) {
        parent::__construct($code, $previous);
    }

    protected function getName() {
        return __CLASS__;
    }
}