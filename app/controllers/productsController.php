<?php

    class productsController extends Controller {

        public function __construct()
        {
            $this->homeModel = $this->model('Products');
        }

        public function index()
        {
            // $this->addModel->delete($_POST['idVoyage']);
            $this->view('products/index');
        }

        public function view_product()
        {
            $this->view('products/view_product');
        }
    }