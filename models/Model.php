<?php
include_once("models/DataMapper.php");

include_once("models/PasswordDirector.php");
include_once("models/PasswordBuilder.php");
include_once("models/Password.php");

/*
 * Model Class -
 * Acts as the main model layer, creating the builder and director, getting the
 * data from the DataMapper, and returning the result
 */
class Model {
    private $passwordDirector;
    private $passwordBuilder;

    # instructions if $_POST is not set
    public function getInstructions()  {
        return "Click the button to get a new password";
    }

    public function getPassword()  {
        $passwordBuilder = new PasswordBuilder(DataMapper::retrieveData());
        $passwordDirector = new PasswordDirector($passwordBuilder);
        return $passwordDirector->build();
    }
}
