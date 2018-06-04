<?php

abstract class LinkUserHomeTable extends Table {
    public static function getAllIdsAndLabelsOfHomeByUser($idUser) {
        $houses = [];
        $request = self::prepare("SELECT home FROM link_user_home WHERE user=:user");
        $request->execute([
            ':user' => $idUser
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            $subResult = HomeTable::getOneIdAndLabelById($result["home"]);
            array_push($houses, [$subResult["id"], $subResult["label"]]);
        }
        return $houses;
    }

    public static function getUserByHome($home){
        $ids = [];
        $request = self::prepare("SELECT user FROM link_user_home WHERE home=:home");
        $request->execute([
            ":home" => $home
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            array_push($ids, $result["user"]);
        }
        return $ids;
    }

    public static function addLink($user, $home){
        $request = self::prepare("INSERT INTO link_user_home (user, home) VALUES (:user, :home)");
        $request->execute([
            ':user' => $user,
            ":home" => $home,
        ]);
    }

    public static function deleteLinkByUser($user){
        $request = self::prepare("DELETE FROM link_user_home WHERE user=:user");
        $request->execute([
            ':user' => $user
        ]);
    }
}