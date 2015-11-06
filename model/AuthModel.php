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

    public static function logout() {
        $_SESSION['userName'] = null;
    }

    public static function userExists($userName, $password = null) {
        $user = UsersPDO::get($userName, $password);

        if(empty($user)) {
            return false;
        }
        return true;
    }
}