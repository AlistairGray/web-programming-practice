<?php
/**
 * Пусть задан текст, представляющий собой последовательность строк.
 * Признак конца строки и текста вводится пользователем. Выведите на
 * печать заданный текст в порядке возрастания длин строк.
 */
?>
    <form method="post" action="">
        Введите несколько строк, разделённых точкой<br/>
        <textarea rows="20" cols="100" title="Введите строку" name="text"></textarea><br>
        <input type="submit" name="send" value="Распечатать"><br/>
    </form>

<?php

/**
 * Функция сравнения значений массива
 * @param $a
 * @param $b
 * @return int
 */
function cmp($a, $b)
{
    if (mb_strlen($a) == mb_strlen($b)) {
        return 0;
    }
    return (mb_strlen($a) < mb_strlen($b)) ? -1 : 1;
}

if (isset($_POST['send'])) {
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
        $arStrings = explode(".", $text);

        usort($arStrings, "cmp");

        echo "<b>Отсортированные строки: </b><br/>";
        foreach ($arStrings as $value) {
            echo $value . "<br/>";
        }
    } else echo "Поле не заполнено! <br/>";
}
