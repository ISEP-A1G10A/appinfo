<?php

abstract class Lang {
    private static $defaultLanguage = "fr";
    private static $availableLanguages = [
        "fr"
    ];

    /**
     * @param $lang string ex: "fr"
     * @return string
     */
    private static function verifyLang($lang) {
        if (array_key_exists($lang, self::$availableLanguages)) {
            return $lang;
        } else {
            return self::$defaultLanguage;
        }
    }

    /**
     * @param $lang string
     * @return array|mixed
     */
    public static function getStrings($lang) {
        $lang = self::verifyLang($lang);
        try {
            if (file_exists('../app/lang/' . $lang . '.php')) {
                return require '../app/lang/' . $lang . '.php';
            } else {
                throw new FileNotFindException("/app/lang/" . $lang . ".php");
            }
        } catch (FileNotFindException $exception) {
            echo $exception;
        }
        return [];
    }
}