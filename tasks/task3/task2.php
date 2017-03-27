<?php
/**
 * Найдите наибольший общий делитель двух натуральных
 * чисел с помощью алгоритма Евклида.
 */
?>

    <form method="post" action="">
        Введите первое натуральное число: <br/>
        <input type="text" title="Первое натуральное число" name="fNumber"><br/>
        Введите второе натуральное число: <br/>
        <input type="text" title="Второе натуральное число" name="sNumber"><br/>
        <input type="submit" name="find" value="Найти"><br/>
    </form>

<?php
/**
 * Функция рекурсивно находит наибольший общий делитель по алгоритму Евклида
 * @param $a
 * @param $b
 * @return mixed
 */
function gcd($a, $b)
{
    return $b == 0 ? $a : gcd($b, $a % $b);
}

if (isset($_POST['find'])) {
    if (isset($_POST['fNumber']) && isset($_POST['sNumber'])) {
        $fNumber = $_POST['fNumber'];
        $sNumber = $_POST['sNumber'];

        echo "Наибольший общий делитель чисел " . $fNumber . " и " . $sNumber . " равен " . gcd($fNumber, $sNumber);
    } else echo "Одно или несколько полей не аполнено! <br/>";
}