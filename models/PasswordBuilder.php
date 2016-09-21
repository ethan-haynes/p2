<?php
class PasswordBuilder {
    private $upperCase;
    private $numbers;
    private $specialChars;
    private $wordCount;
    private $wordList;

    public function __construct($arr) {
        $this->wordList = $arr;
    }

    public function setUpperCase($upperCase) {
        $this->upperCase = $upperCase;
    }

    public function setNumbers($numbers) {
        $this->numbers = $numbers;
    }

    public function setSpecialChars($specialChars) {
        $this->specialChars = $specialChars;
    }

    public function setWordCount($wordCount) {
        $this->wordCount = $wordCount;
    }

    public function getUpperCase() {
        return $this->upperCase;
    }

    public function getNumbers() {
        return $this->numbers;
    }

    public function getSpecialChars() {
        return $this->specialChars;
    }

    public function getWordCount() {
        return $this->wordCount;
    }

    public function getWordList() {
        return $this->wordList;
    }

    public function build() {
        return (new Password($this))->assemblePassword();
    }
}
