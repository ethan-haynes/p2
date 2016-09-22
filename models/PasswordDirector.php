<?php

class PasswordDirector {
    private $builder;
    const DEFAULT_WC = 1;
    public function __construct(PasswordBuilder $builder) {
         $this->builder = $builder;
    }
    public function build() {
        $uc = isset($_POST["uppercase"]);
        $ac  = (isset($_POST["caps"]) && $_POST["caps"] == "ac") ? true : false;
        $n  = isset($_POST["numbers"]);
        $sp = isset($_POST["specialcharacters"]);
        $wc = (integer) $_POST["wordcount"];
        $sc = (integer) $_POST["numSC"];

        if (!$this->validate($wc) || !$this->validate($sc))
            return "ERROR";

        $this->builder->setUpperCase($uc);
        $this->builder->setAllCaps($ac);
        $this->builder->setNumbers($n);
        $this->builder->setSpecialChars($sp);
        $this->builder->setWordCount($wc);
        $this->builder->setSpecialCharsCount($sc);
        return $this->builder->build();
    }

    private function validate($input) {
        if ($input <= 0 || 9 <= $input)
            return false;
        else
            return true;
    }
}
