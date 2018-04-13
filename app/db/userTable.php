<?php

abstract class userTable extends Table {
    public static function getOneById($id) {
        $request = self::prepare("SELECT * FROM user WHERE id=:id");
        return $request->execute([
            ":id" => $id
        ]);
    }
}