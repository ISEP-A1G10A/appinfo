<?php

class URL {
    private $url;
    private static $urlBase;

    public function __construct($url) {
        if ($url === true) {
            $this->url = substr($_SERVER['REQUEST_URI'], strlen(dirname($_SERVER['SCRIPT_NAME'])) + 1);
        } else {
            $this->url = $url;
        }
    }

    /**
     * @return string
     */
    public function __toString() {
        return self::$urlBase . $this->url;
    }

    /**
     * @param mixed $urlBase
     */
    public static function setUrlBase($urlBase) {
        if (!isset(self::$urlBase)) {
            self::$urlBase = substr($urlBase, 0, strlen($urlBase)); // remove "public/"
        }
    }
}