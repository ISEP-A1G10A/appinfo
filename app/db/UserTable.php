<?php

abstract class UserTable extends Table {
    private static function getAllById($id) {
        $request = self::prepare("SELECT * FROM user WHERE id=:id");
        return $request->execute([
            ":id" => $id
        ]);
    }

    private static function getAllIdsAndTypesAndPasswordsByEmail($email) {
        $request = self::prepare("SELECT id, type, password FROM user WHERE email=:email");
        $request->execute([
            ':email' => $email
        ]);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUserOrError($email, $password) {
        $users = self::getAllIdsAndTypesAndPasswordsByEmail($email);
        if (count($users) > 0) {
            foreach ($users as $user) {
                if (Encryption::compare($password, $user["password"])) {
                    return ["success", $user];
                }
            }
            return ["error", ["connection", "wrong_password"]];
        }
        return ["error", ["connection", "no_user_with_given_email"]];
    }
    
     public static function getMailOrError($email) {
        $users = self::getAllIdsAndTypesAndPasswordsByEmail($email);
        if (count($users) > 0) {
            return ["success", $user];
            }
        return ["error", ["forgot", "no_user_with_given_email"]];
    }
}