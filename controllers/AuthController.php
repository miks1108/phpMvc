<?php

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class AuthController extends Controller {

    public function registerAction() {
        $this->view("register");
    }

    public function loginAction() {
        $this->view("login");
    }

}