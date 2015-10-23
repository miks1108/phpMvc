<?php

class UserController extends Controller {

    public function indexAction() {
        $this->view('user_index');
    }

    public function listAction() {
        $this->users = [
            [
                'firstName' => 'David',
                'lastName' => 'Smith'
            ],
            [
                'firstName' => 'Sean',
                'lastName' => 'Parker'
            ]
        ];
        $this->view('user_list');
    }

}