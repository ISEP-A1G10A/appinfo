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

    public static function getAllAllById($id){
        $house = [];
        $request = self::prepare("SELECT label, address_line_1, address_line_2, address_zip_code, address_city, address_country, surface, id FROM home WHERE id=:id");
        $request->execute([
           ':id' => $id
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result){
            $roomsRequest = RoomTable::getAllIdsAndLabelsByHome($result["id"]);
            array_push($house, [$result["label"], $result["address_line_1"], $result["address_line_2"], $result["address_zip_code"], $result["address_city"], $result["address_country"], $result["surface"], $roomsRequest]);
        }
        return $house;
    }

    public static function setAllById($id, $label, $address1, $address2, $zip, $city, $country, $surface) {
        $request = self::prepare("UPDATE home SET label=:label, address_line_1=:address1, address_line_2=:address2, address_zip_code=:zip, address_city=:city, address_country=:country, surface=:surface WHERE id=:id");
        $request->execute([
            ':id' => $id,
            ':label' => $label,
            ':address1' => $address1,
            ':address2' => $address2,
            ':zip' => $zip,
            ':city' => $city,
            ':country' => $country,
            ':surface' => $surface
        ]);
    }
}