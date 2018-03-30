<?php

class FileNotFindException extends CustomException {
    public function __construct($file, $code = 0, Exception $previous = null) {
        parent::__construct($code, $previous);
        $this->message = "Not file found with the name " . $file;
    }

    protected  function getName() {
        return __CLASS__;
    }
}