<?php


class Fantasy01
{
    public $random;
    public $fMyLetter01;
    public $fArrayLetter = array("a", "o", "e", "i", "u", "ai", "ya", "ei", "el", "la", "li", "io", "yo", "go", "zo", "fa", "fi", "fo", "lio",
        "fe", "fa", "fio", "tha", "tho", "gra", "tio", "pa", "lio", "lie", "vio", "via", "ve", "ke", "ko", "co", "bo", "se", "se");

// first letter to uppercase + random number
    public function fGive01()
    {
        $this->random = rand(0, count($this->fArrayLetter) - 1);
        $this->fMyLetter01 = ucfirst($this->fArrayLetter[$this->random]);
        return $this->fMyLetter01;
    }

}