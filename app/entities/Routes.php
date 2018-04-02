<?php

abstract class Routes {
    private static $appRoutes = [
        "home" => [HomePage::class],
        "404"  => [Status404Page::class],
        "418"  => [Status418Page::class]
//        "users/{}"           => [UserPage::class],
//        "users/{}/infos"     => [UserPage::class, ["infos"]], // modify informations form : display = none; et bouton "modify" JS change valeurs, au clic je submit la form
//        "users/{}/houses"    => [UserPage::class, ["houses"]],
//        "users/{}/houses/{}" => [HomePage::class] // HousePage
    ];

    /**
     * @return array routes
     */
    public static function getRoutes() {
        return self::$appRoutes;
    }
}