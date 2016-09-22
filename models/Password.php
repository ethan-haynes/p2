<?php
class Password {
    private $upperCase;
    private $allCaps;
    private $numbers;
    private $specialChars;
    private $wordCount;
    private $wordList;
    private $specialCharsCount;

    #constants
    const MIN = 0;
    const MAX_N = 9;
    const MAX_SC = 27;
    const MAX_WL = 21;
    const WORD = "word";
    const SPECIAL_CHARS = "special-characters";

    public function __construct(PasswordBuilder $b) {
        $this->upperCase = $b->getUpperCase();
        $this->allCaps = $b->getAllCaps();
        $this->numbers = $b->getNumbers();
        $this->specialChars = $b->getSpecialChars();
        $this->wordCount = $b->getWordCount();
        $this->specialCharsCount = $b->getSpecialCharsCount();
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

    private function canAddSC($scCount) {
        return $this->specialChars && $scCount < $this->specialCharsCount;
    }

    public function assemblePassword() {
        $pwd = "";
        $scCount = 0;

        for ($i=0; $i < $this->wordCount; $i++) {
            $temp = $this->addWord($i);

            if ($this->upperCase)
                $temp = $this->upperCase($temp);

            if ($this->numbers)
                $temp .= $this->addNumber($scCount);

            if ($this->canAddSC($scCount))
                $temp .= $this->addSpecialChars();

            $pwd .= $temp;
            $scCount++;
        }

        //if word count is less than scCount, finish adding here
        while ($this->canAddSC($scCount)) {
            $pwd .= $this->addSpecialChars();
            $scCount++;
        }
        
        if ($this->allCaps)
            return strtoupper($pwd);
        else
            return $pwd;
    }
}
