<?php

require_once('Japan01.php');
require_once('Japan02.php');



$japan01 = new Japan01;
$japan021 = new Japan02;
$japan022 = new Japan02;
$japan023 = new Japan02;
$random = 0;


for($i = 1; $i <4; $i++){
    $random = rand(1, 3);
    if ($random == 2) {
        $l1 = $japan01->jGive01();
        $l2 = $japan021->jGive02();
        $_SESSION["jname$i"] = $l1.$l2;
    } else if ($random == 3) {
        $l1 = $japan01->jGive01();
        $l21 = $japan021->jGive02();
        $l22 = $japan022->jGive02();
        $_SESSION["jname$i"] = $l1.$l21.$l22;
    } else {
        $l1 = $japan01->jGive01();
        $l21 = $japan021->jGive02();
        $l22 = $japan022->jGive02();
        $l23 = $japan023->jGive02();
        $_SESSION["jname$i"] = $l1.$l21.$l22.$l23;
    }

}