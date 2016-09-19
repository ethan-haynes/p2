<?php
include_once("models/DataMapper.php");

include_once("models/PasswordDirector.php");
include_once("models/PasswordBuilder.php");
include_once("models/Password.php");

class Model {
    private $passwordDirector;
    private $passwordBuilder;

    public function getInstructions()  {
        return "Click the button to get a new password";
    }

    public function getPassword()  {
        $passwordBuilder = new PasswordBuilder(DataMapper::retrieveData());
        $passwordDirector = new PasswordDirector($passwordBuilder);
        $password = $passwordDirector->build();
        return $password->assemblePassword();
    }
}
