<?php
/**
 * Дан набор из n целочисленных элементов. Найти максимальное
 * количество подряд идущих максимальных  элементов.
 */
?>
    <form method="post" action="">
        Введите элементы масства через пробел<br/>
        <input type="text" title="Введите элементы массиа" name="numbers"><br>
        <input type="submit" name="find" value="Найти"><br/>
    </form>

<?php
if (isset($_POST['find'])) {
    if (strlen($_POST['numbers'])) {
        $numbers = trim($_POST['numbers']);
        $arNumbers = explode(" ", $numbers);
        // Добавим false для обозначения конца массива элементов
        $arNumbers[] = false;
        $maxNumber = max($arNumbers);
        $arCountMaxElement = [];
        $maxElementCount = 0;

        for ($i = 0; $i < count($arNumbers); $i++) {
            if ($arNumbers[$i] == $maxNumber) {
                $maxElementCount++;
            } elseif ($arNumbers[$i - 1] == $maxNumber) {
                $arCountMaxElement[] = $maxElementCount;
                $maxCount = 0;
            }
        }

        echo "Самая длинная последовательность максимального элемента (" . $maxNumber . ") равна "
            . max($arCountMaxElement);
    } else echo "Поле не заполнено! <br/>";
}
