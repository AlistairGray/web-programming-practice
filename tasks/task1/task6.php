<?php
/**
 * Написать программу нахождения всех целых положительных чисел, не превосходящих N,
 * которые имеют ровно M целых положительных делителей.
 */
?>
<form method="post" action="">
    Введите правую границу искомого числа <br/>
    <input type="text" title="Правая границы искомого числа" name="rightBorder"><br/>
    Введите количесво полодительных делителей <br/>
    <input type="text" title="Количество положительных делителей" name="dividerCount"><br/>
    <input type="submit" name="find" value="Найти"><br/>
</form>
<?php
if (isset($_POST['find'])) {
    if (isset($_POST['rightBorder']) && isset($_POST['dividerCount'])) {
        $rightBorder = $_POST['rightBorder'];
        $dividerCount = $_POST['dividerCount'];

        if ($rightBorder > 0 && $dividerCount > 0) {
            $arResult = [];

            for ($i = 1; $i <= $rightBorder; $i++) {
                $k = 0;

                for ($j = 1; $j <= $i; $j++) {
                    if ($i % $j == 0) {
                        $k = $k + 1;
                    }
                }
                if ($k == $dividerCount) {
                    $arResult[] = $i;
                }
            }

            echo "Целые положительные число до " . $rightBorder . ", имеющие " . $dividerCount . " делителей: <br/>";
            foreach ($arResult as $value) {
                echo $value != end($arResult) ? $value . ", " : $value;
            }
        } else echo "Поля формы заполненны некорректно! <br/>";
    } else echo "Одно или несколько полей не заполнены! <br/>";
}