<?php

class UserController extends Controller {

    public function indexAction() {
        $this->view('user_index');
    }

    public function listAction() {
        $con = new PDO('mysql:host=localhost;dbname=itstep_db', 'itstep', '123123');
        $resultStmt = $con->query('SELECT * FROM users');
        $this->users = $resultStmt->fetchAll();
        $this->view('user_list');
    }

}