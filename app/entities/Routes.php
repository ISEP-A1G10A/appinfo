<?php

abstract class Routes {
    private static $appRoutes = [
        "showcase"  => [
            "home"    => [HomePage::class],
            "sign-in" => [SignInPage::class],
//        "users/{}"           => [UserPage::class],
//        "users/{}/infos"     => [UserPage::class, ["infos"]], // modify informations form : display = none; et bouton "modify" JS change valeurs, au clic je submit la form
//        "users/{}/houses"    => [UserPage::class, ["houses"]],
//        "users/{}/houses/{}" => [HomePage::class] // HousePage
        ],
        "connected" => [
            "home" => [HomeConnectedPage::class]
        ],
        "admin_sys" => [
            "logs"       => [LogsPage::class],
            "logs-debug" => [LogsDebugPage::class],
            "sign-in"    => [SignInPage::class], // TODO : remove
        ],
        "status"    => [
            "404" => [Status404Page::class],
            "418" => [Status418Page::class]
        ]
    ];

    /**
     * @return array showcase routes
     */
    public static function getShowcaseRoutes() {
        return array_merge(self::$appRoutes["showcase"], self::$appRoutes["status"]);
    }

    public static function getConnectedRoutes() {
        return array_merge(self::$appRoutes["connected"], self::$appRoutes["status"]);
    }

    public static function getAdminSysRoutes() {
        return array_merge(self::$appRoutes["admin_sys"], self::$appRoutes["status"]);
    }
}