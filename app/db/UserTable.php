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

    public static function getAllAllById($id) {
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

    public static function getNamesById($id) {
        $names = [];
        $request = self::prepare("SELECT first_name, last_name FROM user WHERE id=:id");
        $request->execute([
            ':id' => $id
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            array_push($names, [$result["first_name"], $result["last_name"], $id]);
        }
        return $names;
    }

    public static function getIdByNames($first_name, $last_name) {
        $request = self::prepare("SELECT id FROM user WHERE first_name=:first_name AND last_name=:last_name");
        $request->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name
        ]);
        $results = $request->fetchAll(PDO::FETCH_ASSOC);
        return $results[0]["id"];
    }


    public static function setNamesById($first_name, $last_name, $id) {
        $request = self::prepare("UPDATE user SET first_name=:first_name, last_name=:last_name WHERE id=:id");
        $request->execute([
            ":first_name" => $first_name,
            ":last_name" => $last_name,
            ':id' => $id
        ]);
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

    public static function getAll() {
        $request = self::prepare("SELECT user.id,user.first_name,user.last_name,user_type.label AS type,user.email,user.phone FROM user
INNER JOIN user_type ON user.type=user_type.id
ORDER BY user.id");
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addMember($first_name, $last_name, $type, $email, $phone, $password) {

        $request = self::prepare("INSERT INTO user (first_name,last_name,type,email,phone,password) VALUES (:first_name,:last_name,:type,:email,:phone,:password)");
        $request->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':type' => $type,
            ':email' => $email,
            ':phone' => $phone,
            ':password' => Encryption::encrypt($password),

        ]);
    }

    public static function setPassById($id, $password) {
        $request = self::prepare("UPDATE user SET password=:password WHERE id=:id");
        $request->execute([
            ':id' => $id,
            ':password' => Encryption::encrypt($password)
        ]);
    }

    public static function setFirstNameById($id, $name) {
        $request = self::prepare("UPDATE user SET first_name=:first_name WHERE id=:id");
        $request->execute([
            ':id' => $id,
            ':first_name' => $name
        ]);
    }

    public static function setLastNameById($id, $name) {
        $request = self::prepare("UPDATE user SET last_name=:last_name WHERE id=:id");
        $request->execute([
            ':id' => $id,
            ':last_name' => $name
        ]);
    }

    public static function addUser($first_name, $last_name) {
        $request = self::prepare("INSERT INTO user (first_name, last_name, type) VALUES (:first_name, :last_name, :type)");
        $request->execute([
            ':first_name' => $first_name,
            ":last_name" => $last_name,
            ":type" => 4,
        ]);
    }

    public static function deleteUserById($id) {
        $request = self::prepare("DELETE FROM user WHERE id=:id");
        $request->execute([
            ':id' => $id
        ]);
    }

}