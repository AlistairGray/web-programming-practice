<?php
/**
 * Шахматная доска содержит 8 × 8 клеток. Горизонтали и вертикали обозначаются цифрами 1 – 8.
 * Написать программу, проверяющую, что заданные две клетки имеют одинаковый цвет.
 */
?>
    <form method="post" action="">
        <b>Введите координаты первой клетки</b><br/>
        X1: <input type="text" title="X1" name="x1"><br/>
        Y1: <input type="text" title="Y1" name="y1"><br/>
        <b>Введите координаты второй клетки</b><br/>
        X2: <input type="text" title="X2" name="x2"><br/>
        Y2: <input type="text" title="Y2" name="y2"><br/>
        <input type="submit" name="check" value="Проверить"><br/>
        <b>P.S.</b> Размер доски 8x8
    </form>

<?php
/**
 * Возвращает цвет клетки шахматной доски по её координатам
 * @param $x - координа по горизонтали
 * @param $y - коорлината по вертикали
 * @return string
 */
function getColor($x, $y)
{
    if ($y % 2 == 0) {
        return $x % 2 == 0 ? "White" : "Black";
    } else return $x % 2 == 0 ? "Black" : "White";
}

/**
 * Проверка координат на принадлежность диапозону размера шахматной доски
 * @param $value
 * @return bool
 */
function checkRange($value) {
    return $value >=1 && $value <=8;
}

if (isset($_POST['check'])) {
    if (isset($_POST['x1']) && isset($_POST['y1']) && isset($_POST['x2']) && isset($_POST['y2'])) {
        $x1 = $_POST['x1'];
        $y1 = $_POST['y1'];
        $x2 = $_POST['x2'];
        $y2 = $_POST['y2'];

        if (checkRange($x1) && checkRange($x1) && checkRange($x1) && checkRange($x1)) {
            if (getColor($x1, $y1) == getColor($x2, $y2)) {
                echo "Заданные клетки имеют одинаковый цвет! <br/>";
            } else echo "Заданные клетки меют разный цвет! <br/>";
        } else echo "Координаты одной или нескольких из клеток выходят за допустимый диапозон! <br/>";
    } else echo "Одно или несколько полей не заполнены! <br/>";
}