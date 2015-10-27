<?php

class UserController extends Controller {

    public function indexAction() {
        $con = Database::pdo();
        $this->view('user_index');
    }

    public function listAction() {
        $con = Database::pdo();
        $stmt = $con->prepare('SELECT * FROM users');
        $stmt->execute();
        $this->users = $stmt->fetchAll();
        $this->view('user_list');
    }

}