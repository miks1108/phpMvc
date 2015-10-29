<?php

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class UsersPDO {
    public static function getAll() {
        return getAllLimit();
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