<?php

class UserController extends Controller {

    public function indexAction() {
        $con = Database::pdo();
        $this->view('user_index');
    }

    public function listAction() {
        $number = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limitOffset = ($page - 1) * $number;

        /*var_dump([$limitOffset, $number]);
        die();*/

        $con = Database::pdo();
        $stmt = $con->prepare('SELECT * FROM `users` LIMIT :offset, :number');
        $stmt->execute([
            ':offset' => $limitOffset,
            ':number' => $number
        ]);
        $this->users = $stmt->fetchAll();
        $this->view('user_list');
    }

}