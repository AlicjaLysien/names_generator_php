<?php


class Japan02
{
    public $random;
    public $jMyLetter02;
    public $jArrayLetter = array("ka", "ki", "ku", "ke", "ko", "sa", "shi", "su", "se", "so", "na", "ni", "nu", "ne", "no",
        "ta", "chi", "tsu", "te", "to", "ga", "gi", "gu", "ge", "go", "ra", "ru", "ru", "re", "ro", "ya", "yu", "yo");

// first letter to uppercase + random number
    public function jGive02()
    {
        $this->random = rand(0, count($this->jArrayLetter) - 1);
        $this->jMyLetter02 = $this->jArrayLetter[$this->random];
        return $this->jMyLetter02;
    }



}