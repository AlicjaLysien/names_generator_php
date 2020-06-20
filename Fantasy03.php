<?php


class Fantasy03
{
    public $random;
    public $fMyLetter03;
    public $fArrayLetter = array("zor", "yo", "ya", "lion", "dor", "dian", "no", "ria", "lia", "dion", "cia", "sia", "vov", "nov", "hon",
        "thas", "jon", "zon", "nor", "na", "rey", "ray", "xis", "nox");


// first letter to uppercase + random number
    public function fGive03()
    {
        $this->random = rand(0, count($this->fArrayLetter) - 1);
        $this->fMyLetter03 = $this->fArrayLetter[$this->random];
        return $this->fMyLetter03;
    }


}