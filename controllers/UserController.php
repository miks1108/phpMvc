<?php

class UserController extends Controller {

    public function indexAction() {
        $con = Database::pdo();
        $this->view('user_index');
    }

    public function listAction() {
        $con = Database::pdo();
        $resultStmt = $con->query('SELECT * FROM users');
        $this->users = $resultStmt->fetchAll();
        $this->view('user_list');
    }

}