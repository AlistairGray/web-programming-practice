<?php
/**
 * Найти все трехзначные простые числа, определив  функцию,
 * позволяющую распознавать простые числа
 */

/**
 * Функция определяет, является ли число простым
 * @param $num - проверяемое число
 * @return bool
 */
function isSimple($num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if (!($num % $i)) {
            return false;
        }
    }
    return true;
}

echo "Простые трёхзначные числа: <br/>";

for ($i = 100; $i <= 999; $i++) {
    if (isSimple($i)) {
         echo $i . "; ";
    }
}