<?php
require_once 'model/PDO/UsersPDO.php';

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class AuthController extends Controller {

    public function registerAction() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];

            if(empty($userName)) {
                $errors[] = 'User Name required';
            }
            else if(strlen($userName) < 4) {
                $errors[] = 'User Name must be more than 4 letters';
            }

            if(empty($email)) {
                $errors[] = 'Email required';
            }
            else if(strlen($userName) < 5) {
                $errors[] = 'Email must be more than 5 letters';
            }

            if(empty($password)) {
                $errors[] = 'Password required';
            }
            else if(strlen($password) < 6) {
                $errors[] = 'Password must be more than 6 letters';
            }
            else {
                if(empty($cpassword)) {
                    $errors[] = 'Password confirmation required';
                }
                else if ($password != $cpassword) {
                    $errors[] = 'Password confirmation is wrong';
                }
            }

            if(empty($errors)) {
                UsersPDO::addUser($userName, $email, $password);
                $this->view('register_success');
                return;
            }
            else {
                $this->errors = $errors;
            }

        }

        $this->view("register");
    }

    public function loginAction() {
        $this->view("login");
    }

}