<?php
include_once("models/Model.php");

/*
 * Controller Class -
 * Creates and calls the model layer. Routes the views.
 */
class Controller {
    private $model;

    #constructer creates model
    public function __construct() {
         $this->model = new Model();
    }

    public function run() {
        #if post is empty, get instructions,  else get password
        $password = (empty($_POST)) ?
            $this->model->getInstructions() :
            $this->model->getPassword($_POST);

        # if model returns an error, load the error view
        if ($password == "ERROR")
            $password = file_get_contents('./views/error.php');

        include 'views/view.php';
    }
}
