<?php

class URL {
    private $url;
    private static $urlBase;

    public function __construct($url) {
        $this->url = $url;
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
            self::$urlBase = substr($urlBase, 0, strlen($urlBase)-7); // remove "public/"
        }
    }
}