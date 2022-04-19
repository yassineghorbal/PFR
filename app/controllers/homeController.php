<?php

    class homeController extends Controller {

        public function __construct()
        {
            $this->homeModel = $this->model('Home');
        }

        public function index()
        {
            // $this->addModel->delete($_POST['idVoyage']);
            $this->view('home/index');
        }

        
    }