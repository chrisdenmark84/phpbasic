<?php

function isEven($num)
{
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

echo isEven(1) . "<br>";
echo isEven(2) . "<br>";
echo isEven(562) . "<br>";
