<?php

abstract class RoomTable extends Table {

    public static function getAllLabelsByHome($home){
        $rooms = [];
        $request = self::prepare("SELECT label FROM room WHERE home=:home");
        $request->execute([
           ":home" => $home
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result){
            $sensors = GearTable::getAllLabelsByRoom($home);
            array_push($rooms, [$result["label"], $sensors] );
        }
        return $rooms;
    }
}