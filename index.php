<?php
include_once("controllers/Controller.php");

# main entry point into the application. creates and runs controller.
$app = function() {
    (new Controller)->run();
};
$app();
