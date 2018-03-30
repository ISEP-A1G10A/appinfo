<?php

abstract class Logger {
    /** Log in /logs/
     * @param string $file file's name
     * @param string $type log's type, ex: EXCEPTION
     * @param string $msg add message at the end of the line
     */
    private static function log($file, $type, $msg = "") {
        $date = date("Y-m-d H:i:s");
        $line = $date . " [" . strtoupper($type) . "] " . session_id() . " " . $_SERVER['REMOTE_ADDR'] . " " . $msg . "\n";
        file_put_contents("../app/logs/" . $file, $line, FILE_APPEND);
    }

    /*
     * LOG TYPES
     */
    public static function logException($exceptionName) {
        self::log("log.txt", "exception", $exceptionName);
    }

    public static function logConnection() {
        self::log("log.txt", "new_connection");
    }

    public static function logDebug($msg) {
        self::log("log_debug.txt", "debug", $msg);
    }

    /*
     * LOG STATUS
     */
    private static function logStatus($code) {
        self::log("log.txt", "status_" . $code);
    }

    public static function log404() {
        self::logStatus("404");
    }

    public static function log418() {
        self::logStatus("418");
    }

    public static function log500() {
        self::logStatus("500");
    }
}
