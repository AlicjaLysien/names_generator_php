<?php

require_once('Fantasy01.php');
require_once('Fantasy02.php');
require_once('Fantasy03.php');


$fantasy01 = new Fantasy01;
$fantasy021 = new Fantasy02;
$fantasy022 = new Fantasy02;
$fantasy03 = new Fantasy03;
$random = 0;


for($i = 1; $i <4; $i++){
    $random = rand(1, 3);
        if ($random == 2) {
            $l1 = $fantasy01->fGive01();
            $l3 = $fantasy03->fGive03();
            $_SESSION["fname$i"] = $l1.$l3;
        } else if ($random == 3) {
            $l1 = $fantasy01->fGive01();
            $l21 = $fantasy021->fGive02();
            $l3 = $fantasy03->fGive03();
            $_SESSION["fname$i"] = $l1.$l21.$l3;
        } else {
            $l1 = $fantasy01->fGive01();
            $l21 = $fantasy021->fGive02();
            $l22 = $fantasy022->fGive02();
            $l3 = $fantasy03->fGive03();
            $_SESSION["fname$i"] = $l1.$l21.$l22.$l3;
    }

}