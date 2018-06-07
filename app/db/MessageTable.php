<?php

abstract class MessageTable extends Table {

    public static function addMessage($user, $object, $content){
        $request = self::prepare("INSERT INTO message (user, object, date, content) VALUES (:user, :object, now(), :content)");
        $request->execute([
           ":user" => $user,
           ":object" => $object,
           ":content" => $content
        ]);
    }

}