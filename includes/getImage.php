<?php

function GetImage($x, $y)
{
    $z = rand(5, 15);

    $arg = "https://source.unsplash.com/random/500x500";

    if ($x && $y) {
        $arg = "https://source.unsplash.com/random/" . $x . "x" . ($y + $z);

    }

    return $arg;

}
