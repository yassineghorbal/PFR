<?php

    class userController extends Controller {

        public function __construct()
        {
            $this->userModel = $this->model('Home');
        }

        public function login()
        {
            $this->view('user/login');
        }

        
    }