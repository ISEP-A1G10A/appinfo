<?php

class MissingDatabaseConfigInformationException extends CustomException {
    public function __construct($missing, $code = 0, Exception $previous = null) {
        parent::__construct($code, $previous);
        $this->message = "Missing information in database config : " . $missing;
    }

    protected function getName() {
        return __CLASS__;
    }
}