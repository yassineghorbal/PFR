<?php

    class addController extends Controller {

        public function __construct()
        {
            $this->addModel = $this->model('Add');
        }

        public function index()
        {
            // $this->addModel->delete($_POST['idVoyage']);
            $this->view('User/add');
        }

        public function idafa()
        {
            $this->addModel->insert(23, 'mohammed', 'LALA');
        }

        public function selectVoyages()
        {
            $data = $this->addModel->select();
            $this->view('user/select', $data);
        }
    }