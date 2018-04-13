<?php

abstract class Table {
    private static $PDO, $initialized = false;

    public static function initializationPDO() {
        $config = require "db.php";
        try {
            if (!isset($config['db_host'])) {
                throw new MissingDatabaseConfigInformationException("db_host");
            } elseif (!isset($config['db_name'])) {
                throw new MissingDatabaseConfigInformationException("db_name");
            } elseif (!isset($config['db_user'])) {
                throw new MissingDatabaseConfigInformationException("db_user");
            } elseif (!isset($config['db_pass'])) {
                throw new MissingDatabaseConfigInformationException("db_pass");
            }
        } catch (MissingDatabaseConfigInformationException $exception) {
        }
        self::$PDO = new PDO("mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'], $config['db_user'], $config['db_pass']);
        self::$initialized = true;
    }

    protected static function prepare($sql) {
        if (!self::$initialized) {
            self::initializationPDO();
        }
        return self::$PDO->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    }
}