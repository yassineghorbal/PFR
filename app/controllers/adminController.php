<?php

    class adminController extends Controller {

        public function __construct()
        {
            $this->adminModel = $this->model('Admin');
        }

        public function index()
        {
            $this->view('admin/home');
        }

        public function orders()  
        {
            $this->view('admin/orders');
        }

        public function products()
        {
            $this->view('admin/products');
        }

        public function customers()
        {
            $this->view('admin/customers');
        }

        public function login()
        {
            $this->view('admin/login');
        }
    }