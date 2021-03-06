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
            $sensors = GearTable::getAllIdsAndLabelsAndTypesByRoom($result["id"]);
            array_push($rooms, [$result["id"], $result["label"], $sensors] );
        }
        return $rooms;
    }

    public static function getAllIdsByHome($home){
        $request = self::prepare("SELECT id FROM room WHERE home=:home");
        $request->execute([
           ":home" => $home
        ]);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getIdByLabel($label){
        $request = self::prepare("SELECT id FROM room WHERE label=:label");
        $request->execute([
            ":label" => $label
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        return $results[0]["id"];
    }

    public static function setLabelById($id, $label){
        $request = self::prepare("UPDATE room SET label=:label WHERE id=:id");
        $request->execute([
           ":id" => $id,
           ":label" => $label
        ]);
    }

    public static function addRoom($label, $home){
        $request = self::prepare("INSERT INTO room (label, home) VALUES (:label, :home)");
        $request->execute([
           ":label" => $label,
           ":home" => $home
        ]);
    }

    public static function deleteRoomById($id){
        $request = self::prepare("DELETE FROM room WHERE id=:id");
        $request->execute([
           ":id" => $id
        ]);
    }
}