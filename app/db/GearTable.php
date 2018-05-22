<?php

abstract class GearTable extends Table {
    public static function getAllLabelsByRoom($room) {
        $sensors = [];
        $request = self::prepare("SELECT label FROM gear WHERE room=:room");
        $request->execute([
           ':room' => $room
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            array_push($sensors, $result["label"]);
        }
        return $sensors;
    }
}