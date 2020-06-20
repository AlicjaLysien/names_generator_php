<?php


class Japan01
{
    public $random;
    public $jMyLetter01;
    public $jArrayLetter = array("a", "i", "u", "e", "o", "ka", "ki", "ku", "ke", "ko", "sa", "shi", "su", "se", "so",
        "na", "ni", "nu", "ne", "no", "ta", "chi", "tsu", "te", "to", "ga", "gi", "gu", "ge", "go", "ra", "ru", "ru", "re", "ro",
        "ya", "yu", "yo");

// first letter to uppercase + random number
    public function jGive01()
    {
        $this->random = rand(0, count($this->jArrayLetter) - 1);
        $this->jMyLetter01 = ucfirst($this->jArrayLetter[$this->random]);
        return $this->jMyLetter01;
    }

}