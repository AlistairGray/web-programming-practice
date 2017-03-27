<?php
//TODO Доделать

function A($end, $num = 1, $prevNum = 0)
{
    $end--;
    return $end == 0 ? $num : A($end, pow($prevNum, 2) + pow($num, 2), $num);
}


echo A(3);



