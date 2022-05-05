<?php

    class userController extends Controller {

        public function __construct()
        {
            $this->userModel = $this->model('User');
        }


        public function login()
        {
            $this->view('user/login');
        }

        public function signup()
        {
            $this->view('user/signup');
        }

        public function cart()
        {
            $this->view('user/cart');
        }

        public function wishlist()
        {
            $this->view('user/wishlist');
        }

        public function profile()
        {
            $this->view('user/profile');
        }
    }