<?php

abstract class Regex {
    /** Return the string tested if match
     * @param $url string to test
     * @param $pattern string for regex
     * @return string
     */
    public static function urlMatch($url, $pattern) {
        $pattern = str_replace("{}", "(\d)+", $pattern);
        return preg_match("(^" . $pattern . "/*$)", $url) ? $url : "";
    }

    /** Return ids if exist
     * @param $url
     * @return bool|array ids if exist
     */
    public static function getIdsFromUrl($url) {
        $possibilities = explode("/", $url);
        $ids = [];
        foreach ($possibilities as $possibility) {
            if (preg_match("((\d)+)", $possibility)) {
                $ids = array_merge($ids, [$possibility]);
            }
        }
        return $ids;
//        preg_match("#/(\d)+$#", $url, $matches);
//        if (count($matches) > 0) {
//            return substr($matches[0], 1);
//        }
//        preg_match("#/(\d)+/#", $url, $matches);
//        return substr($matches[0], 1, -1);
    }

    public static function urlMatchPattern($pattern) {
        if (isset($_SERVER['REDIRECT_URL'])) { // ex: localhost/appinfo/public/home/
            $tmp = $_SERVER['REDIRECT_URL'];
            if (substr($tmp, -1) != "/") {
                $tmp .= "/";
            }
            $p = substr($tmp, strlen(dirname($_SERVER['SCRIPT_NAME'])) + 1); // if URL = "localhost/appinfo/public/a/", give "a/"
        } else { // ex: localhost/appinfo/public/
            $p = "home";
        }
        return self::urlMatch($p, $pattern);
    }
}