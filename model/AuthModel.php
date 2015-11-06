<?php
require_once 'model/PDO/UsersPDO.php';


/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class AuthModel {
    public static function login($userName, $password) {
        if(self::userExists($userName, $password)) {
            $_SESSION['userName'] = $userName;
            return true;
        }
        return false;
    }

    private static function userExists($userName, $password) {
        return empty(UsersPDO::get($userName, $password)) ? false : true;
    }
}