<?php
include_once("controllers/Controller.php");

$app = function() {
    (new Controller)->run();
};
$app();
