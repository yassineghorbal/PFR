<?php

    class adminController extends Controller {

        public function __construct()
        {
            $this->adminModel = $this->model('Admin');
        }

        public function index()
        {
            $this->view('admin/products');
        }

        public function orders()  
        {
            $this->view('admin/orders');
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