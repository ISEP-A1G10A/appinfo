<?php

abstract class Routes {
    private static $appRoutes = [
        "home"               => [HomePage::class],
//        "users/{}"           => [UserPage::class],
//        "users/{}/infos"     => [UserPage::class, ["infos"]], // modify informations form : display = none; et bouton "modify" JS change valeurs, au clic je submit la form
//        "users/{}/houses"    => [UserPage::class, ["houses"]],
//        "users/{}/houses/{}" => [HomePage::class] // HousePage
    ];

    /**
     * @return array
     */
    public static function getAppRoutes() {
        return self::$appRoutes;
    }

    private static $statusRoutes = [
        "418" => Status418Page::class,
        "404" => Status404Page::class
    ];

    /**
     * @return array
     */
    public static function getStatusRoutes() {
        return self::$statusRoutes;
    }
}