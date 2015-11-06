<?php
require_once "model/PDO/UsersPDO.php";
require_once "model/AuthModel.php";

class UserController extends Controller {

    public function indexAction() {
        $this->view('user_index');
    }

    public function listAction() {

        if(!AuthModel::isLogin()) {
            header('Location: /auth/login/');
            return;
        }

        $number = 10;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limitOffset = ($page - 1) * $number;

        $this->page = $page;
        $this->pageCount = ceil(UsersPDO::count() / $number);
        $this->users = UsersPDO::getAllLimit($limitOffset, $number);

        $this->view('user_list');
    }

}