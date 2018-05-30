<?php

abstract class GearTable extends Table {
    public static function getAllIdsAndLabelsAndTypesByRoom($roomId) {
        $sensors = [];
        $request = self::prepare("SELECT id, label, type FROM gear WHERE room=:room");
        $request->execute([
           ':room' => $roomId
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            array_push($sensors, [$result["id"], $result["label"], $result["type"]]);
        }
        return $sensors;
    }

    public static function setAllLabelsByRoom($roomId, $label){
        $request = self::prepare("UPDATE gear SET label=:label WHERE room=:room");
        $request->execute([
            ":room" => $roomId,
            ":label" => $label
        ]);
    }

    /*public static function setNewSensorByRoom($label, $room){
        $request = self::prepare("INSERT INTO gear (label, room) VALUES ($label, $room)");
        $request->execute([
            ""
        ]);
    }*/
}