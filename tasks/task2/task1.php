<?php
/**
 * Разработайте числовые функции для вычисления у. Для любых a, b, c найдите значение у
 */
?>

    <form method="post" action="">
        Введите A: <br/>
        <input type="text" title="A" name="a"><br/>
        Введите B: <br/>
        <input type="text" title="B" name="b"><br/>
        Введите C: <br/>
        <input type="text" title="C" name="c"><br/>
        <input type="submit" name="find" value="Найти"><br/>
    </form>

<?php
if (isset($_POST['find'])) {
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // С помощью сабаки гасим вывод предупреждений
        $y = @(log(5 * pow($c, 2) + 13 * pow($b, sqrt($c - $b)), 3 + cos($a))
            + log(23 * pow($b, 2) + pow($a, 4), 2 + pow($a, 2))
            / log(7 * pow($b, 2) + pow($c, $a + 2 * $c), 5));

        echo $y;
    } else echo "Одно или несколько полей не заполнены! <br/>";
}
