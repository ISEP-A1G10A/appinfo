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
}