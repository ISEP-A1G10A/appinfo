<?php

abstract class HomeTable extends Table {
    public static function getAllIdsAndLabelsByMainUser($idMainUser) {
        $houses = [];
        $request = self::prepare("SELECT id, label FROM home WHERE main_user=:main_user");
        $request->execute([
            ':main_user' => $idMainUser
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            array_push($houses, [$result["id"], $result["label"]]);
        }
        return $houses;
    }

    public static function getOneIdAndLabelById($id) {
        $request = self::prepare("SELECT id, label FROM home WHERE id=:id");
        $request->execute([
            ':id' => $id
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        if (count($results) > 0) {
            return $results[0];
        }
        return $results;
    }
}