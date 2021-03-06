<?php

abstract class Routes {
    private static $appRoutes = [
        "showcase"  => [
            "home"            => [HomePage::class],
            "sign-in"         => [SignInPage::class],
            "test"            => [TestPage::class],
            "forgot-password" => [ForgotPasswordPage::class],
//        "users/{}"           => [UserPage::class],
//        "users/{}/infos"     => [UserPage::class, ["infos"]], // modify informations form : display = none; et bouton "modify" JS change valeurs, au clic je submit la form
//        "users/{}/houses"    => [UserPage::class, ["houses"]],
//        "users/{}/houses/{}" => [HomePage::class] // HousePage
        ],
        "connected" => [
            "home"               => [HomeConnectedPage::class],
            "profile"            => [ProfilePage::class],
            "houses/{}/sensors"  => [SensorsPage::class],
            "houses/{}/settings" => [SettingsPage::class],
            "help"               => [HelpPage::class],
        ],
        "admin_sys" => [
            "home"       => [LogsPage::class],
            "logs"       => [LogsPage::class],
            "logs-debug" => [LogsDebugPage::class],
        ],
        "admin_sav" => [
            "home"    => [MembersPage::class],
            "members" => [MembersPage::class],
            "houses"  => [HousesPage::class],
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

    public static function getAdminSavRoutes() {
        return array_merge(self::$appRoutes["admin_sav"], self::$appRoutes["status"]);
    }
}