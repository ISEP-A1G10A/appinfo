<?php

abstract class Routes {
    private static $appRoutes = [
        "showcase"    => [
            "home" => [HomePage::class]
//        "users/{}"           => [UserPage::class],
//        "users/{}/infos"     => [UserPage::class, ["infos"]], // modify informations form : display = none; et bouton "modify" JS change valeurs, au clic je submit la form
//        "users/{}/houses"    => [UserPage::class, ["houses"]],
//        "users/{}/houses/{}" => [HomePage::class] // HousePage
        ],
        "client_app"  => [
        ],
        "back_office" => [
        ],
        "status"      => [
            "404" => [Status404Page::class],
            "418" => [Status418Page::class]
        ],
        "form"        => [
            "connection" => [ConnectionForm::class]
        ]
    ];

    /**
     * @return array showcase routes
     */
    public static function getShowcaseRoutes() {
        return array_merge(self::$appRoutes["showcase"], self::$appRoutes["status"]);
    }

    public static function getFormRoutes() {
        return self::$appRoutes["form"];
    }
}