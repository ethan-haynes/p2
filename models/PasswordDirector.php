<?php
include_once("./data/Messages.php");

class PasswordDirector {
    private $builder;
    const DEFAULT_WC = 1;
    public function __construct(PasswordBuilder $builder) {
         $this->builder = $builder;
    }
    public function build() {
        $uc = (isset($_POST["uppercase"])) ? true : false;
        $n  = (isset($_POST["numbers"])) ? true : false;
        $sp = (isset($_POST["specialcharacters"])) ? true : false;
        $wc = (integer) $_POST["wordcount"];

        if ($wc <= 0 || 9 <= $wc)
            return INVALID_NUMBER;

        $this->builder->setUpperCase($uc);
        $this->builder->setNumbers($n);
        $this->builder->setSpecialChars($sp);
        $this->builder->setWordCount($wc);
        return $this->builder->build();
    }
}
