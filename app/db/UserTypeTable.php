<?php

abstract class UserTypeTable extends Table {

    public static function getRoleByTypeId($id) {
        $request = self::prepare("SELECT label FROM user_type WHERE id=:id");
        $request->execute([
            ':id' => $id
        ]);
        return ($request->fetchAll(PDO::FETCH_ASSOC))[0]["label"];
    }
}