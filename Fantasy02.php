<?php


class Fantasy02
{
    public $random;
    public $fMyLetter02;
    public $fArrayLetter = array("ma", "to", "ye", "zi", "uo", "kai", "wa", "yo", "la", "lo", "fi", "fa", "wu", "vio", "via", "ro", "ra",
        "re", "ri", "tho", "tha", "jo", "xo", "xa", "xe", "tu", "su", "ze", "ba", "pi", "ti", "ho", "ha", "da" ,"dio");

// first letter to uppercase + random number
    public function fGive02()
    {
        $this->random = rand(0, count($this->fArrayLetter) - 1);
        $this->fMyLetter02 = $this->fArrayLetter[$this->random];
        return $this->fMyLetter02;
    }



}