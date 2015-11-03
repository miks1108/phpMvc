<?php

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class UsersPDO {

    public static function addUser($userName, $email, $password) {
        $con = Database::pdo();
        $stmt = $con->prepare('INSERT INTO users (UserName, `Password`, Email)
            VALUES (:userName, :password, :email)');

        $stmt->execute([
            ':userName' => $userName,
            ':password' => $password,
            ':email' => $email
        ]);
    }

    public static function getAll() {
        $con = Database::pdo();
        $result = $con->query('SELECT * FROM `users`');

        return $result->fetchAll();
    }

    public static function getAllLimit($offset = 0, $number = 0) {
        $con = Database::pdo();
        $stmt = $con->prepare('SELECT * FROM `users` LIMIT :offset, :number');
        $stmt->execute([
            ':offset' => $offset,
            ':number' => $number
        ]);

        return $stmt->fetchAll();
    }

    public static function count() {
        $con = Database::pdo();
        $result = $con->query('SELECT COUNT(*) AS count FROM `users`');
        $count = $result->fetch();

        return $count['count'];
    }
}