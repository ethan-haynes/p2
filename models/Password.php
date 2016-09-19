<?php
class Password {
    private $upperCase;
    private $numbers;
    private $specialChars;
    private $wordCount;
    private $wordList;

    #constants
    const MIN = 0;
    const MAX_N = 9;
    const MAX_SC = 27;
    const MAX_WL = 21;
    const WORD = "word";
    const SPECIAL_CHARS = "special-characters";

    public function __construct(PasswordBuilder $b) {
        $this->upperCase = $b->getUpperCase();
        $this->numbers = $b->getNumbers();
        $this->specialChars = $b->getSpecialChars();
        $this->wordCount = $b->getWordCount();
        $this->wordList = $b->getWordList();
    }

    private function upperCase($word) {
        return ucfirst($word);
    }

    private function addNumber() {
        return rand(self::MIN, self::MAX_N);
    }

    private function addSpecialChars() {
        $i = rand(self::MIN, self::MAX_SC);
        return $this->wordList[self::SPECIAL_CHARS][$i];
    }

    private function addWord($i) {
        $j = rand($i,self::MAX_WL);
        return $this->wordList[$j][self::WORD];
    }

    public function assemblePassword() {
        $pwd = "";

        for ($i=0; $i < $this->wordCount; $i++) {
            $temp = $this->addWord($i);

            if ($this->upperCase)
                $temp = $this->upperCase($temp);

            if ($this->numbers)
                $temp .= $this->addNumber();

            if ($this->specialChars)
                $temp .= $this->addSpecialChars();

            $pwd .= $temp;
        }

        return $pwd;
    }
}
