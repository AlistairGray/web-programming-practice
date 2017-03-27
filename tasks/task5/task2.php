<?php
/**
 * Дан массив, состоящий из n элементов. Назовем серией группу
 * подряд идущих одинаковых элементов, а длиной серии — количество
 * этих элементов (длина серии может быть равна 1). Вставить перед
 * каждой серией минимальный элемент массива.
 */
?>
    <form method="post" action="">
        Введите элементы масства через пробел<br/>
        <input type="text" title="Элементы массиа" name="numbers"><br>
        <input type="submit" name="find" value="Найти"><br/>
    </form>

<?php


if (isset($_POST['find'])) {
    if (strlen($_POST['numbers'])) {
        $numbers = trim($_POST['numbers']);
        $arNumbers = explode(" ", $numbers);
        $minNumber = min($arNumbers);
        $newArNumbers = $arNumbers;

        for ($i = 0; $i < count($arNumbers); $i++) {
            if ($arNumbers[$i] == $arNumbers[$i + 1] && $arNumbers[$i] != $arNumbers[$i - 1]) {
                array_splice( $newArNumbers, $i, 0, $minNumber );
            }
        }

        echo "<pre>";
        echo "Массив до изменения: ";
        print_r($arNumbers);
        echo "Массив после изменения: ";
        print_r($newArNumbers);
        echo "</pre>";

    } else echo "Поле не заполнено! <br/>";
}
