<?php
include_once("models/Model.php");

class Controller {
    private $model;

    public function __construct() {
         $this->model = new Model();
    }

    public function run() {
        $password = (empty($_POST)) ?
            $this->model->getInstructions() :
            $this->model->getPassword($_POST);

        phpinfo();
        include 'views/view.php';
    }
}
