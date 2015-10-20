<?php

class UserController extends Controller {

    public function indexAction() {
        $this->view('user_index');
    }

    public function listAction() {
        $this->view('user_list');
    }

}