<?php
$in = file("input.txt");

foreach ($in as &$inx) {
    $inx = trim($inx);
    $inx = str_repeat($inx, 1000);
}

function countl($row,$col,$in) {
    $x = 0;
    $c = 1;
    $hit = 0;
    foreach ($in as $line) {
        if ($c % $col or $col == 1) {
            if ($line[$x] == "#") {
                $hit = $hit + 1;
            }
            $x = $x + $row;
        }
        $c = $c + 1;
    }
    return($hit);
}



echo countl(3,1,$in);