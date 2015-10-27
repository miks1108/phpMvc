<?php

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class Database {
    private static $pdo = null;

    public static function pdo() {
        if(!isset(self::$pdo)) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=itstep_db', 'itstep', '123123');
            self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        }

        return self::$pdo;
    }
}