<?php
/**
 * Подсчитать, сколько раз среди последовательности символов
 * встречается символ, задаваемый вводом.
 */
?>
    <form method="post" action="">
        Введите послдедовательность символов<br/>
        <input type="text" title="Последовательность символов" name="string"><br/>
        Введите искомый символ<br/>
        <input type="text" title="Искомый символ" name="symbol"><br/>
        <input type="submit" name="find" value="Подсчитать"><br/>
    </form>
<?php

if (isset($_POST['find'])) {
    if(isset($_POST['string']) && isset($_POST['symbol'])) {
        $string = $_POST['string'];
        $symbol = $_POST['symbol'];
        $count = 0;

        // Решение с использованием функций языка php
        $count = substr_count($string, $symbol);

        // Своё решение (не работает с кириллицей)
//        for ($i = 0; $i <= strlen($string); $i++) {
//            $test = $string{$i};
//
//            if ($test == $symbol) {
//                $count++;
//            }
//        }
        echo "В введённой строке найдено " . $count . " вхождений символа " . $symbol . "<br/>";
    } else echo "Одно или несколько полей не заполнены! <br/>";
}

