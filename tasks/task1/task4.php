<?php
/**
 * Составить программу, которая по заданным году и номеру месяца m
 * определяет количество дней в этом месяце.
 */
?>
    <form method="post" action="">
        Введите год:<br>
        <input type="text" title="Год" name="year"><br>
        Введите месяц:<br>
        <input type="text" title="Год" name="moon"><br>
        <input type="submit" name="getDaysCount" value="Узнать количество дней"><br/>
    </form>

<?php
/**
 * Проверяет, високосный год или нет
 * @param $year - проверяемый год
 * @return bool
 */
function isLeap($year)
{
    return $year % 400 == 1 || ($year % 100 != 0 && ($year & 3) == 0);
}

if (isset($_POST['getDaysCount'])) {
    if (!empty($_POST['year']) && !empty($_POST['moon'])) {
        $year = $_POST['year'];
        $moon = $_POST['moon'];
        $arDays = [1 => 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if (isLeap($year)) {
            $arDays[2] = 29;
        }

        echo "В " . $moon . " месяце " . $year . " года " . $arDays[$moon] . " дней. <br/>";
    } else echo "Одно или несколько полей не заполнены! <br/>";
}