<?php

/*
 * PasswordDirector Class -
 * Main objective is to provide the relevant data to the builder.
 */
class PasswordDirector {
    private $builder;
    const DEFAULT_WC = 1;
    public function __construct(PasswordBuilder $builder) {
         $this->builder = $builder;
    }
    public function build() {
        # checks form data, if it is set, if it is valid
        $uc = isset($_POST["uppercase"]);
        $ac  = (isset($_POST["caps"]) && $_POST["caps"] == "ac") ? true : false;
        $n  = isset($_POST["numbers"]);
        $sp = isset($_POST["specialcharacters"]);
        $wc = (integer) $_POST["wordcount"];
        $sc = (integer) $_POST["numSC"];

        if (!$this->validate($wc) || !$this->validate($sc))
            return "ERROR";

        # passes data to builder
        $this->builder->setUpperCase($uc);
        $this->builder->setAllCaps($ac);
        $this->builder->setNumbers($n);
        $this->builder->setSpecialChars($sp);
        $this->builder->setWordCount($wc);
        $this->builder->setSpecialCharsCount($sc);
        return $this->builder->build();
    }

    # validates form data
    private function validate($input) {
        if ($input <= 0 || 9 <= $input)
            return false;
        else
            return true;
    }
}
