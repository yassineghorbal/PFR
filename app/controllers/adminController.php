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
    }