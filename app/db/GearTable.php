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

    public static function addGear($type, $label, $room){
        $request = self::prepare("INSERT INTO gear (type, label, room) VALUES (:type, :label, :room)");
        $request->execute([
            ":type" => $type,
            ":label" => $label,
            ":room" => $room
        ]);
    }

    public static function setLabelById($label, $id){
        $request = self::prepare("UPDATE gear SET label=:label WHERE id=:id");
        $request->execute([
            ":label" => $label,
            ":id" => $id
        ]);
    }

    public static function deleteGearById($id){
        $request = self::prepare("DELETE FROM gear WHERE id=:id");
        $request->execute([
           ":id" => $id
        ]);
    }
}