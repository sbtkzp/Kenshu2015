<?php

$n = explode(" ",fgets(STDIN));
$sou = 0;

if($n[0] == 0||$n[1] == 0){
    echo $sou."\n";
} else {
    for($i=0;$i<$n[1];$i++){
        $hiyo = explode(" ",fgets(STDIN));
        $total = array_sum($hiyo);
        if($total >= 0){
            $sou += $total;
        }
    }
    echo $sou."\n";
}
