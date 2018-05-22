<?php

abstract class RoomTable extends Table {

    public static function getAllIdsAndLabelsByHome($home){
        $rooms = [];
        $request = self::prepare("SELECT id, label FROM room WHERE home=:home");
        $request->execute([
           ":home" => $home
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result){
            $sensors = GearTable::getAllLabelsByRoom($result["id"]);
            array_push($rooms, [$result["id"], $result["label"], $sensors] );
        }
        return $rooms;
    }
}