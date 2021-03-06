<?php

/*
 * PasswordBuilder Class -
 * Builder class to gather allt he information needed to make a fully formed
 * Password object.
 */
class PasswordBuilder {
    private $upperCase;
    private $allCaps;
    private $numbers;
    private $specialChars;
    private $wordCount;
    private $wordList;
    private $specialCharsCount;

    public function __construct($arr) {
        $this->wordList = $arr;
    }

    public function setUpperCase($upperCase) {
        $this->upperCase = $upperCase;
    }

    public function setAllCaps($allCaps) {
        $this->allCaps = $allCaps;
    }

    public function setNumbers($numbers) {
        $this->numbers = $numbers;
    }

    public function setSpecialChars($specialChars) {
        $this->specialChars = $specialChars;
    }

    public function setSpecialCharsCount($specialCharsCount) {
        $this->specialCharsCount = $specialCharsCount;
    }

    public function setWordCount($wordCount) {
        $this->wordCount = $wordCount;
    }

    public function getUpperCase() {
        return $this->upperCase;
    }

    public function getAllCaps() {
        return $this->allCaps;
    }

    public function getNumbers() {
        return $this->numbers;
    }

    public function getSpecialChars() {
        return $this->specialChars;
    }

    public function getSpecialCharsCount() {
        return $this->specialCharsCount;
    }

    public function getWordCount() {
        return $this->wordCount;
    }

    public function getWordList() {
        return $this->wordList;
    }

    # creates fully formed password object and calls its assemble method
    public function build() {
        return (new Password($this))->assemblePassword();
    }
}
