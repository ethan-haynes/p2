<?php
include_once("models/Model.php");

class Controller {
    private $model;

    public function __construct() {
         $this->model = new Model();
    }

    public function run() {
        $server = 'http://'.$_SERVER["SERVER_NAME"];
        $password = (empty($_POST)) ?
            $this->model->getInstructions() :
            $this->model->getPassword($_POST);

        include '$server/views/view.php';
    }
}
