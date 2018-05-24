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

    public static function getAllAllById($id){
        $request = self::prepare("SELECT first_name, last_name, phone, email FROM user WHERE id=:id");
        $request->execute([
            ':id' => $id
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

    public static function getPassById($id) {
        $request = self::prepare("SELECT password FROM user WHERE id=:id");
        $request->execute([
            ':id' => $id
        ]);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function setAllById($id, $first_name, $last_name, $email, $phone) {
        $request = self::prepare("UPDATE user SET email=:email, phone=:phone, first_name=:first_name, last_name=:last_name WHERE id=:id");
        $request->execute([
           ':id' => $id,
           ':email' => $email,
           ':phone' => $phone,
           ':first_name' => $first_name,
           ':last_name' => $last_name
        ]);
    }

    public static function setPassById($id, $password) {
        $request = self::prepare("UPDATE user SET password=:password WHERE id=:id");
        $request->execute([
            ':id' => $id,
            ':password' => Encryption::encrypt($password)
        ]);
    }
}