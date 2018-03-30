<?php

class Autoloader {
    static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    /**
     * @param $class string to load
     */
    static function autoload($class) {
        try {
            if ($class === "Page") {
                require 'controllers/Page.php';
            } elseif (self::endswith($class, "Page")) {
                if (self::startswith($class, "Status")) {
                    $file = 'controllers/status/' . $class . '.php';
                    if (file_exists("../app/entities/" . $file)) {
                        require $file;
                    } else {
                        throw new FileNotFindException($file);
                    }
                } else {
                    $file = 'controllers/app/pages/' . $class . '.php';
                    if (file_exists("../app/entities/" . $file)) {
                        require $file;
                    } else {
                        throw new FileNotFindException($file);
                    }
                }
            } elseif (self::endswith($class, "Exception")) {
                require 'exceptions/' . $class . '.php';
            } else {
                $file = $class . ".php";
                if (file_exists("../app/entities/" . $file)) {
                    require $file;
                } elseif (file_exists("../app/entities/widgets/" . $file)) {
                    require "widgets/" . $file;
                } else {
                    throw new FileNotFindException($file);
                }
            }
        } catch (FileNotFindException $e) {
            echo "file not found: " . $class;
        }
    }

    /**
     * @param $string string to test
     * @param $end string to compare
     * @return bool
     */
    static function endswith($string, $end) {
        return substr($string, -strlen($end)) === $end;
    }

    /**
     * @param $string string to test
     * @param $start string to compare
     * @return bool
     */
    static function startswith($string, $start) {
        return substr($string, 0, strlen($start)) === $start;
    }
}